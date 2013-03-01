#######################################################

 Magic Thumb™
 CubeCart (v.3.x and v.4.x) module version v4.0.11 [v1.0.44:v2.0.48]
 
 www.magictoolbox.com
 support@magictoolbox.com

 Copyright 2011 Magic Toolbox

#######################################################

INSTALLATION:

1. Unzip the CubeCart module.

2. Upload the 'magictoolbox' directory to the /modules directory of your CubeCart website.

3. Find and backup your xtpl.php file. File is located here:

For CubeCart 3+:

  classes/xtpl.php

For CubeCart 4+:

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

9. Find following line:

  <ul class="navItem" id="navStoreModules">

and add this line after it:

    <li><a <?php if(permission('magictoolbox','read')){ ?>href="<?php echo $glob['adminFile']; ?>?_g=modules&amp;module=magictoolbox" class="txtLink"<?php } else { echo $link401; } ?>>MagicToolbox</a></li>

10. Save changes and close the file.

11. Activate and configure Magic Thumbâ„¢ through the 'Modules -> MagicToolbox' page in your CubeCart Administration panel.

12. You've now installed the demo version of Magic Thumb!

13. To upgrade, buy Magic Thumb and overwrite the magicthumb.js file with the same file from the full version.

Buy a single license here:

http://www.magictoolbox.com/buy/magicthumb/

