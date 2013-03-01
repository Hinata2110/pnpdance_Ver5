<?php
    /**
        CubeCart module installer class
    */

    require_once(dirname(__FILE__) . '/magictoolbox.installer.core.class.php');

    class MagicToolboxCubecartModuleInstallerClass extends MagicToolboxCoreInstallerClass {
        var $cubecartVersion;
        var $xtplFile;
        var $adminFolder = '/admin';

        function MagicToolboxCubecartModuleInstallerClass() {
            $this->dir = dirname(dirname(__FILE__));
            $this->modDir = dirname(__FILE__) . '/module';

            //for fix url's in css files
            require_once(dirname(dirname(__FILE__)) . '/includes/global.inc.php');
            $this->resDir = $glob['rootRel'] . 'modules/magictoolbox/MagicZoomPlus/core';
            if(isset($glob['adminFolder'])) {
                $this->adminFolder = '/'.$glob['adminFolder'];
            } else {
                $this->adminFolder = '/admin';
            }

            if(file_exists($this->dir . '/classes/xtpl.php')) {
                $this->cubecartVersion = 3;
                $this->xtplFile = '/classes/xtpl.php';
            } else {
                $this->cubecartVersion = 4;
                $this->xtplFile = '/classes/xtpl/xtpl.php';
            }
        }

        function checkPlace() {
            $this->setStatus('check', 'place');
            if(!file_exists($this->dir . $this->xtplFile)) {
                $this->setError('Wrong location: please upload the files from the ZIP archive to the Cubecart store directory.');
                return false;
            }
            if($this->installMode == 'install' && file_exists(dirname($this->dir . $this->xtplFile) . '/xtpl_original.php')) {
                $this->setError('The file xtpl_original.php is present in ' . dirname($this->dir . $this->xtplFile) . ' folder. Make sure that another version of module is not installed.');
                return false;
            }
            return true;
        }

        function checkPerm() {
            $this->setStatus('check', 'perm');
            $files = array(
                // directory
                '/modules',
                '/classes' .  ($this->cubecartVersion == 4 ? '/xtpl' : ''),
                $this->adminFolder . '/includes',
                // file
                $this->xtplFile,
                $this->adminFolder . '/includes/navigation.inc.php'
            );
            if($this->cubecartVersion == 3) {
                $files[] = $this->adminFolder . '/modules';
            }
            list($result, $wrang) = $this->checkFilesPerm($files);
            if(!$result) {
                $this->setError('This installer need to modify some Cubecart store files.');
                $this->setError('Please check write access for following files of your Cubecart store:');
                $this->setError($wrang, '&nbsp;&nbsp;&nbsp;-&nbsp;');
                return false;
            }
            return true;
        }

        function backupFiles() {
            $this->setStatus('backup', 'files');
            $backups = array(
                $this->xtplFile,
                $this->adminFolder . '/includes/navigation.inc.php'
            );
            list($result, $wrang) = $this->createBackups($backups);
            if(!$result) {
                $this->setError('Can\'t create backups for following files:');
                $this->setError($wrang, '&nbsp;&nbsp;&nbsp;-&nbsp;');
                $this->setError('Please check write access');
                return false;
            }
            return true;
        }

        function restoreStep_backupFiles() {
            $this->removeBackups(array(
                $this->xtplFile,
                $this->adminFolder . '/includes/navigation.inc.php'
            ));
            return true;
        }

        function installFiles() {
            $this->setStatus('install', 'files');

            //copy magictoolbox folder into /app/etc
            $this->copyDir($this->modDir . '/magictoolbox', $this->dir . '/modules/magictoolbox');

            if($this->cubecartVersion == 3) {
                //copy admin folder for CubeCart 3
                $this->copyDir($this->modDir . '/admin/modules', $this->dir . '/admin/modules');
            }

            //modify xtpl.php file
            $c = file_get_contents($this->dir . $this->xtplFile);
            $pattern = '/class\s+XTemplate/is';
            $replace = 'class XTemplate_original';
            $c = preg_replace($pattern, $replace, $c);
            $pattern = '/function\s+XTemplate\s+\(/is';
            $replace = 'function XTemplate_original(';
            $c = preg_replace($pattern, $replace, $c);
            file_put_contents($this->dir . $this->xtplFile, $c);

            //move xtpl.php to xtpl_original.php
            rename($this->dir . $this->xtplFile, dirname($this->dir . $this->xtplFile) . '/xtpl_original.php');

            //copy new xtpl.php
            copy($this->modDir . '/xtpl.php', $this->dir . $this->xtplFile);
            chmod($this->dir . $this->xtplFile, 0755);

            //modify navigation.inc.php file
            $c = file_get_contents($this->dir . $this->adminFolder . '/includes/navigation.inc.php');
            if(strpos($c, 'magictoolbox') === false) {

                if($this->cubecartVersion == 4) {
                    $pattern = '/(<ul[^>]*?id="navStoreModules"[^>]*>)/is';
                    $replace = "$1\n\t\t".
                    '<li><a <?php if(permission(\'magictoolbox\',\'read\')){ ?>href="<?php echo $glob[\'adminFile\']; ?>?_g=modules&amp;module=magictoolbox" class="txtLink"<?php } else { echo $link401; } ?>>MagicToolbox</a></li>'.
                    "\n";
                } else {
                    $pattern = '/(<span[^>]*?class="[^"]*?navTitle[^"]*"[^>]*>.*?<\/span>[^<]*?<ul>)/is';
                    $replace = "$1\n\t\t".
                    '<li><a <?php if(permission(\'magictoolbox\',\'read\')==TRUE){ ?>href="<?php echo $GLOBALS[\'rootRel\']; ?>admin/modules/magictoolbox/" class="txtLink"<?php } else { echo $link401; } ?>>MagicToolbox</a></li>'.
                    "\n";
                }
                $c = preg_replace($pattern, $replace, $c);
                file_put_contents($this->dir . $this->adminFolder . '/includes/navigation.inc.php', $c);
            }

            return true;
        }

        function restoreStep_installFiles() {
            $this->restoreFromBackups(array(
                $this->xtplFile,
                $this->adminFolder . '/includes/navigation.inc.php'
            ));
            $this->removeDir($this->dir . '/modules/magictoolbox/MagicZoomPlus');
            if($this->cubecartVersion == 3) {
                $this->removeDir($this->dir . '/admin/modules/magictoolbox/MagicZoomPlus');
            }
            unlink(dirname($this->dir . $this->xtplFile) . '/xtpl_original.php');
            return true;
        }

        function upgrade($files) {
            $path = $this->dir . '/modules/magictoolbox/MagicZoomPlus/core/';
            foreach($files as $name => $file) {
                if(file_exists($path . $name)) {
                    unlink($path . $name);
                }
                file_put_contents($path . $name, $file);
                chmod($path . $name, 0755);
            }
            return true;
        }

    }
