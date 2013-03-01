<?php
/*-----------------------------------------------------------------------------
 * Extended Product Options
 *-----------------------------------------------------------------------------
 * fs_integration.inc.php
 *-----------------------------------------------------------------------------
 * Author:   Estelle Winterflood
 * Email:    cubecart@expandingbrain.com
 * Website:  http://cubecart.expandingbrain.com
 *
 * Date:     October 14, 2007
 * Updated:  July 16, 2010 - When used with FSPO, show 'please enter text'
 *           message instead of 'please select' if the field is a text input.
 * Compatible with CubeCart Version:  4.x.x
 *-----------------------------------------------------------------------------
 * SOFTWARE LICENSE AGREEMENT:
 * You must own a valid license for this modification to use it on your
 * CubeCart™ store. Licenses for this modification can be purchased from
 * Estelle Winterflood using the URL above. One license permits you to install
 * this modification on a single CubeCart installation only. This non-exclusive
 * license grants you certain rights to use the modification and is not an
 * agreement for sale of the modification or any portion of it. The
 * modification and accompanied documentation may not be sublicensed, sold,
 * leased, rented, lent, or given away to another person or entity. This
 * modification and accompanied documentation is the intellectual property of
 * Estelle Winterflood.
 *-----------------------------------------------------------------------------
 * DISCLAIMER:
 * The modification is provided on an "AS IS" basis, without warranty of
 * any kind, including without limitation the warranties of merchantability,
 * fitness for a particular purpose and non-infringement. The entire risk
 * as to the quality and performance of the Software is borne by you.
 * Should the modification prove defective, you and not the author assume 
 * the entire cost of any service and repair. 
 *-----------------------------------------------------------------------------
 */

if(!defined('CC_INI_SET')){ die("Access Denied"); }

$please_select = "skins/".$config['skinDir']."/styleImages/please_select.gif";
$please_select_thumb = "skins/".$config['skinDir']."/styleImages/thumb_please_select.gif";

$default_image = "modules/3rdparty/Extended_Product_Options/images/please_select.gif";
$default_image_thumb = "modules/3rdparty/Extended_Product_Options/images/thumb_please_select.gif";

// Compatibility with Force Selection of Product Options, by Estelle
if (isset($fspo_mod) && $fspo_mod && $fspo_mod['status_cc4'])
{
	if (!isset($fspo_mod['select_options']) || !$fspo_mod['select_options'] || $option[0]['force_selection'])
    {
		$view_prod_options->assign("VAL_SELECTED", "checked=\"checked\"");
		$view_prod_options->assign("VAL_PS_TAG", "");

		$view_prod_options->assign("VAL_OPTION_REQUIRED", "validate-selection required");
		// Textbox or textarea
		if ($optio[0]['option_type'] == '0' || $option[0]['option_type'] >= '10') {
			$view_prod_options->assign("TXT_OPTION_MESSAGE", $lang['viewProd']['fspo_error_selection_required']);
		} else {
			$view_prod_options->assign("TXT_OPTION_MESSAGE", $lang['viewProd']['fspo_error_text_required']);
		}

		if ($epo_mod['visual_version']) {
			if ($option[0]['is_visual']) {
				$img_src = "";
				if ($epo_mod['use_thumbs']) {
					if (file_exists($please_select_thumb)) {
						$img_src = $GLOBALS['rootRel'].$please_select_thumb;
					} elseif (file_exists($default_image_thumb)) {
						$img_src = $GLOBALS['rootRel'].$default_image_thumb;
					}
				} else {
					if (file_exists($please_select)) {
						$img_src = $GLOBALS['rootRel'].$please_select;
					} elseif (file_exists($default_image)) {
						$img_src = $GLOBALS['rootRel'].$default_image;
					}
				}
				if ($img_src) {
					$view_prod_options->assign("VAL_IMAGE_SRC", $img_src);
					$view_prod_options->parse($eo_fs_parse_base.".please_select.image_true");
				}
			}
		}

		$view_prod_options->parse($eo_fs_parse_base.".please_select");

		// now assign null to VAL_SELECTED
		if ($epo_mod['visual_version'] && $option[0]['is_visual']) {
			// do nothing - we want the first visual option to be selected
		} else {
			$view_prod_options->assign("VAL_SELECTED", "");
		}

	} else {
		$view_prod_options->assign("VAL_OPTION_REQUIRED", "");
		$view_prod_options->assign("TXT_OPTION_MESSAGE", "");
	}
}

?>
