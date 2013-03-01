#######################################################

 Magic Zoom Plus™
 CubeCart (v.3.x and v.4.x) module version v4.0.21 [v1.1.24:v4.0.12]
 
 www.magictoolbox.com
 support@magictoolbox.com

 Copyright 2012 Magic Toolbox

#######################################################

INSTALLATION:

IMPORTANT: Before you start, we recommend you open readme.txt and follow those instructions. It is faster and easier than these readme_manual.txt instructions. If installation failed using the readme.txt procedure, then continue with these instructions instead.

1. Unzip the CubeCart module.

2. Upload the 'magictoolbox' directory to the /modules directory of your CubeCart website.

For CubeCart 3 upload the 'admin' directory to the root directory of your CubeCart website.

3. Find and backup your xtpl.php file. File is located here:

For CubeCart 3:

  classes/xtpl.php

For CubeCart 4:

  classes/xtpl/xtpl.php

4. Rename xtpl.php file to xtpl_original.php then open it in the editor.

5. Find following line:

  class XTemplate

and replace it with:

  class XTemplate_original

6. Save changes and close the file.

7. Copy the file 'xtpl.php' from module zip to there respective folder.

8. Find and backup your navigation.inc.php file located here:

    admin/includes/navigation.inc.php

9. For CubeCart 3 find following lines:

    <span class="navTitle"><?php echo $lang['admin']['nav']['modules'];?></span>
    <ul>

and add this line after it:

    <li><a <?php if(permission("magictoolbox","read")==TRUE){ ?>href="<?php echo $GLOBALS['rootRel']; ?>admin/modules/magictoolbox/" class="txtLink"<?php } else { echo $link401; } ?>>MagicToolbox</a></li>

10. For CubeCart 4 find following line:

    <ul class="navItem" id="navStoreModules">

and add this line after it:

    <li><a <?php if(permission('magictoolbox','read')){ ?>href="<?php echo $glob['adminFile']; ?>?_g=modules&amp;module=magictoolbox" class="txtLink"<?php } else { echo $link401; } ?>>MagicToolbox</a></li>

11. Save changes and close the file.

12. Activate and configure Magic Zoom Plusâ„¢ through the 'Modules -> MagicToolbox' page in your CubeCart Administration panel.

13. You've now installed the demo version of Magic Zoom Plus!

14. To upgrade, buy Magic Zoom Plus and overwrite the magiczoomplus.js file with the same file from the full version.

Buy a single license here:

http://www.magictoolbox.com/buy/magiczoomplus/

