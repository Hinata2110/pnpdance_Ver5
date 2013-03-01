################################################################################
#                                                                              #
#   Connection Bridge                                                          #
#                                                                              #
#   Cart2Cart - Shopping Cart Migration Service                                #
#   File2Cart - Shopping Cart Data Import Service                              #
#   (c) MagneticOne.com                                                        #
#                                                                              #
################################################################################

Dear Customer,

Thank you for choosing our services. We hope this manual will help you install
this Connection Bridge on your site in few minutes. If you experience
any problems  during  installation, please check helpful documentation at
http://support.magneticone.com/ and don't hesitate to contact us we would be
pleased to help you.

How to install:

1. Please upload "cart2cart" folder from this archive to your store root directory

2. Set the permissions as following:

   "bridge.php" - 644 or 666, depends on your server configuration;
   "/cart2cart" folder - 755 or 777, depends on your server configuration.

3. In order to copy images during migration please check on your Target store
   the writing permissions (chmod 777) for images directory and ALL subfolders/files
   it contains.

To check if the Bridge files are working correctly, enter in your browser
address line: http://[yourstore url]/cart2cart/bridge.php
If you see “ERROR_BRIDGE_VERSION_NOT_SUPPORTED” the bridge working CORRECTLY.
If not, please update permission for items mentioned above once again.

NOTE!
We strongly recommend to turn off redirect on your site for proper work of
the Connection Bridge files. To check if you need to turn off the redirect,
follow this link "http://[yourstore url]/cart2cart/bridge.php" and once it's
redirecting to some other link you should disable redirects in your .htaccess file.
It's a hidden file residing in your "shop" folder.



If you have any questions please check:
http://www.shopping-cart-migration.com/faq/1-general-questions/47-what-are-the-connection-bridge-files-and-how-to-download-them
http://www.file2cart.com/faq/2-data-import-service-general-questions/17-what-are-the-connection-bridge-files-and-how-do-you-download-them

Support forums are located at http://forum.shopping-cart-migration.com/

Yours,
MagneticOne Team
http://support.magneticone.com