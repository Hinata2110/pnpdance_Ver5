<?php
/**
* Magic Zoom Plus CubeCart Module
*
* @version v4.0.21 [v1.1.24:v4.0.12]
* @author Magic Toolbox
* @copyright (C) 2008 Magic Toolbox. All rights reserved.
* @link http://www.magictoolbox.com/magiczoomplus/
* @license http://www.magictoolbox.com/license/
* *
* Magic Zoom Plus CubeCart Module comes with absolute no warranty.
*
*/

    // load module
    require_once(dirname(__FILE__) . CC_DS . 'magiczoomplus.module.core.class.php');
    $magiczoomplus_tool = new MagicZoomPlusModuleCoreClass();
    $magiczoomplus_tool->params->loadINI(dirname(dirname(__FILE__)) . CC_DS . 'magiczoomplus.settings.ini');
    //default 'disable-expand' and 'disable-zoom' values
    $magiczoomplus_tool->params->set('disable-expand', 'No');
    $magiczoomplus_tool->params->set('disable-zoom', 'No');
    //to put options in rel
    $magiczoomplus_tool->general->params['disable-expand'] = $magiczoomplus_tool->params->params['disable-expand'];
    $magiczoomplus_tool->general->params['disable-zoom'] = $magiczoomplus_tool->params->params['disable-zoom'];


    $GLOBALS["magictoolbox"]["magiczoomplus"] = & $magiczoomplus_tool;

    if($magiczoomplus_tool->type == 'standard') {
        require_once(dirname(__FILE__) . CC_DS . 'magicscroll.module.core.class.php');
        $magiczoomplus_magicscroll = new MagicScrollModuleCoreClass();
        $magiczoomplus_magicscroll->params->loadINI(dirname(dirname(__FILE__)) . CC_DS . 'magiczoomplus.settings.ini');

        $magiczoomplus_magicscroll->params->set('direction', $magiczoomplus_tool->params->checkValue('template', array('left', 'right')) ? 'bottom' : 'right');

        $GLOBALS["magictoolbox"]["magicscroll"] = & $magiczoomplus_magicscroll;
    }

    if(!defined("SKIN_FOLDER")) define("SKIN_FOLDER", $config['skinDir']);

    function MagicZoomPlus($content, $type) {

        $tool = & $GLOBALS["magictoolbox"]["magiczoomplus"];
        $scroll = & $GLOBALS["magictoolbox"]["magicscroll"];
        $tool->params->set('disable-expand', 'No');
        $tool->params->set('disable-zoom', 'No');


        switch($type) {
            // product view text
            case 'view_prod':

                if($tool->params->checkValue('use-effect-on-product-page', 'Zoom')) {
                    $tool->params->set('disable-expand', 'Yes');
                    $tool->params->set('disable-zoom', 'No');
                } else if($tool->params->checkValue('use-effect-on-product-page', 'Expand')) {
                    $tool->params->set('disable-expand', 'No');
                    $tool->params->set('disable-zoom', 'Yes');
                } else if($tool->params->checkValue('use-effect-on-product-page', 'Swap images only')) {
                    $tool->params->set('disable-expand', 'Yes');
                    $tool->params->set('disable-zoom', 'Yes');
                }



                // load standard product image parcer (for MZ,MT,MM,etc)
                if(!$tool->params->checkValue('use-effect-on-product-page', 'No') && is_array($GLOBALS['prodArray'])) {
                    foreach($GLOBALS['prodArray'] as $product) {
                        MagicZoomPlus_replace($product, $content);
                    }
                }


                break;

            // all text
            case 'body':

                // load category modules (e.g. MagicSlideshow)
                if($tool->type == 'category') {

                    $types = array('featured', 'popular', 'latest');
                    foreach($types as $t) {
                        $content = preg_replace_callback('/<a[^>]+?class=\"MagicZoomPlus\"[^>]+?rel=\"' . $t . '\"[^>]*?>(.*?)<\/a>/is', 'MagicZoomPlus_loadCategoryModule_' . $t, $content);
                        $content = preg_replace_callback('/<a[^>]+?rel=\"' . $t . '\"[^>]+?class=\"MagicZoomPlus\"[^>]*?>(.*?)<\/a>/is', 'MagicZoomPlus_loadCategoryModule_' . $t, $content);
                    }

                    // ids
                    $content = preg_replace_callback('/<a[^>]+?class=\"MagicZoomPlus\"[^>]+?rel=\"([0-9,\s]+)\"[^>]*?>(.*?)<\/a>/is', 'MagicZoomPlus_loadCategoryModule_ids', $content);
                    $content = preg_replace_callback('/<a[^>]+?rel=\"([0-9,\s]+)\"[^>]+?class=\"MagicZoomPlus\"[^>]*?>(.*?)<\/a>/is', 'MagicZoomPlus_loadCategoryModule_ids', $content);


                }

                if($tool->type == 'category' || !$tool->params->checkValue('use-effect-on-featured-products', 'No') || !$tool->params->checkValue('use-effect-on-category-page', 'No') && (string)$GLOBALS['body']->vars['PHP']['page'] == 'viewCat' || !$tool->params->checkValue('use-effect-on-product-page', 'No') && (string)$GLOBALS['body']->vars['PHP']['page'] == 'viewProd') {

                    // load headers
                    $headers = $tool->headers("{$GLOBALS['rootRel']}modules/magictoolbox/MagicZoomPlus/core");
                    if($tool->params->checkValue('magicscroll', 'yes')) {
                        $headers .= $scroll->headers("{$GLOBALS['rootRel']}modules/magictoolbox/MagicZoomPlus/core");
                    }



                    // include headers
                    preg_match("/^(.*?)(<\/head>.*)$/is", $content, $matches);
                    if(!empty($matches)) {
                        $content = $matches[1] . $headers . $matches[2];
                    } else $content = $headers . $content;
                }

                break;

            // category view text
            case 'view_cat':

                if($tool->params->checkValue('use-effect-on-category-page', 'Zoom')) {
                    $tool->params->set('disable-expand', 'Yes');
                    $tool->params->set('disable-zoom', 'No');
                } else if($tool->params->checkValue('use-effect-on-category-page', 'Expand')) {
                    $tool->params->set('disable-zoom', 'Yes');
                    $tool->params->set('disable-expand', 'No');
                }


                // load standard product image parcer (for MZ,MT,MM,etc)
                if($tool->type == 'standard' && !$tool->params->checkValue('use-effect-on-category-page', 'No') && is_array($GLOBALS['productResults'])) {
                    foreach($GLOBALS['productResults'] as $product) {
                        MagicZoomPlus_replace($product, $content, true);
                    }
                }

                break;

            // random (featured) products text
            case 'random_prod':

                if($tool->type == 'category' && $tool->params->checkValue('replace-featured-products', 'Yes')) {
                    $content = preg_replace('/<span[^>]*?><a[^>]+?href=\"[^\"]+?viewProd[^>]+?>(.*?)<\/a><\/span>/is', '', $content);
                    $content = preg_replace_callback('/<a[^>]+?>\s*<img[^>]+?>(.*?)<\/a>/is', 'MagicZoomPlus_loadCategoryModule_featured', $content);
                }

                if($tool->params->checkValue('use-effect-on-featured-products', 'Zoom')) {
                    $tool->params->set('disable-expand', 'Yes');
                    $tool->params->set('disable-zoom', 'No');
                } else if($tool->params->checkValue('use-effect-on-featured-products', 'Expand')) {
                    $tool->params->set('disable-zoom', 'Yes');
                    $tool->params->set('disable-expand', 'No');
                }


                if($tool->type == 'standard' && !$tool->params->checkValue('use-effect-on-featured-products', 'No') && is_array($GLOBALS['randProd'])) {
                    foreach($GLOBALS['randProd'] as $product) {
                        MagicZoomPlus_replace($product, $content, true, 'rand');
                    }
                }

                break;

            // popular products text
            case 'popular_products':
                if($tool->type == 'category' && $tool->params->checkValue('replace-popular-products', 'Yes')) {
                    $content = preg_replace_callback('/<ol[^>]*?>.*?<\/ol>/is', 'MagicZoomPlus_loadCategoryModule_popular', $content);
                }

                break;

            default:

                break;

        }

        return $content;
    }

    function MagicZoomPlus_loadCategoryModule($products, $message = '') {
        $tool = $GLOBALS['magictoolbox']['magiczoomplus'];

        if(!empty($message)) {
            $tool->params->set('message', $message);
        }

        $items = array();
        foreach($products as $prod) {
            $item = array();
            $item['link'] = $GLOBALS['rootRel'] . 'index.php?' . (CC_MTV == 4 ? '_a' : 'act') . '=viewProd&productId=' . intval($prod['productId']);
            $item['title'] = $prod['name'];
            $item['alt'] = $prod['name'];
            //$item['img'] = MagicZoomPlus_getImg($prod['image'], 'original', $product['productId']);
            $item['thumb'] = MagicZoomPlus_getImg($prod['image'], 'thumb', $product['productId']);
            $items[] = $item;
        }

        return $tool->template($items);
    }


    function MagicZoomPlus_loadCategoryModule_featured($matches) {
        global $db;

        $tool = $GLOBALS['magictoolbox']['magiczoomplus'];

        $limit = $tool->params->getValue('count-of-products');

        $seed = mt_rand(1, 10000);

        $what = array();
        $what[] = 'p.name';
        $what[] = 'p.image';
        $what[] = 'p.productId';

        $from = array();
        $from[] = $glob['dbprefix'] . 'CubeCart_inventory as p';
        $from[] = $glob['dbprefix'] . 'CubeCart_category as c';

        $where = array();
        if(isset($_GET['catId'])) {
            $where[] = 'p.cat_id = ' . intval($_GET['catId']);
        }
        $where[] = 'p.cat_id > 0';
        $where[] = 'p.cat_id = c.cat_id';
        $where[] = 'p.image != \'\'';
        if(CC_MTV == 4) {
            $where[] = 'p.disabled !=\'1\'';
            $where[] = 'c.hide =\'0\'';
            $where[] = 'c.cat_desc IS NULL OR c.cat_desc != \'##HIDDEN##\'';
        }


        $sql = 'SELECT DISTINCT ' . implode(', ', $what) .
                    ' FROM ' . implode(', ', $from) .
                    ' WHERE ' . implode(' AND ', $where) .
                    ' ORDER BY RAND(' . intval($seed) . ')' .
                    ' LIMIT ' . $limit;


        $prods = $db->select($sql);

        return MagicZoomPlus_loadCategoryModule($prods, isset($matches[1]) ? $matches[1] : '');
    }

    function MagicZoomPlus_loadCategoryModule_popular($matches) {
        global $db;

        $tool = $GLOBALS['magictoolbox']['magiczoomplus'];

        $limit = $tool->params->getValue('count-of-products');

        $what = array();
        $what[] = 'p.name';
        $what[] = 'p.image';
        $what[] = 'p.productId';

        $from = array();
        $from[] = $glob['dbprefix'] . 'CubeCart_inventory as p';
        $from[] = $glob['dbprefix'] . 'CubeCart_category as c';

        $where = array();
        if(isset($_GET['catId'])) {
            $where[] = 'p.cat_id = ' . intval($_GET['catId']);
        }
        $where[] = 'p.cat_id > 0';
        $where[] = 'p.cat_id = c.cat_id';
        $where[] = 'p.image != \'\'';
        if(CC_MTV == 4) {
            $where[] = 'p.disabled !=\'1\'';
            $where[] = 'c.hide =\'0\'';
            $where[] = 'c.cat_desc IS NULL OR c.cat_desc != \'##HIDDEN##\'';
        }


        $sql = 'SELECT DISTINCT ' . implode(', ', $what) .
                    ' FROM ' . implode(', ', $from) .
                    ' WHERE ' . implode(' AND ', $where) .
                    ' ORDER BY popularity DESC' .
                    ' LIMIT ' . $limit;


        $prods = $db->select($sql);

        return MagicZoomPlus_loadCategoryModule($prods, isset($matches[1]) ? $matches[1] : '');
    }

    function MagicZoomPlus_loadCategoryModule_latest($matches) {
        global $db;

        $tool = $GLOBALS['magictoolbox']['magiczoomplus'];

        $limit = $tool->params->getValue('count-of-products');

        $what = array();
        $what[] = 'p.name';
        $what[] = 'p.image';
        $what[] = 'p.productId';

        $from = array();
        $from[] = $glob['dbprefix'] . 'CubeCart_inventory as p';
        $from[] = $glob['dbprefix'] . 'CubeCart_category as c';

        $where = array();
        if(isset($_GET['catId'])) {
            $where[] = 'p.cat_id = ' . intval($_GET['catId']);
        }
        $where[] = 'p.cat_id > 0';
        $where[] = 'p.cat_id = c.cat_id';
        $where[] = 'p.image != \'\'';
        if(CC_MTV == 4) {
            $where[] = 'p.disabled !=\'1\'';
            $where[] = 'c.hide =\'0\'';
            $where[] = 'c.cat_desc IS NULL OR c.cat_desc != \'##HIDDEN##\'';
        }


        $sql = 'SELECT DISTINCT ' . implode(', ', $what) .
                    ' FROM ' . implode(', ', $from) .
                    ' WHERE ' . implode(' AND ', $where) .
                    ' ORDER BY p.productId DESC' .
                    ' LIMIT ' . $limit;


        $prods = $db->select($sql);

        return MagicZoomPlus_loadCategoryModule($prods, isset($matches[1]) ? $matches[1] : '');
    }

    function MagicZoomPlus_loadCategoryModule_ids($matches) {
        global $db;

        $tool = $GLOBALS['magictoolbox']['magiczoomplus'];

        $limit = $tool->params->getValue('count-of-products');

        $ids = str_replace(' ', '', $matches[1]);

        $what = array();
        $what[] = 'p.name';
        $what[] = 'p.image';
        $what[] = 'p.productId';

        $from = array();
        $from[] = $glob['dbprefix'] . 'CubeCart_inventory as p';

        $where = array();
        $where[] = 'p.image != \'\'';
        $where[] = 'p.productId IN (' . $ids . ')';
        if(CC_MTV == 4) {
            $where[] = 'p.disabled !=\'1\'';
        }


        $sql = 'SELECT DISTINCT ' . implode(', ', $what) .
                    ' FROM ' . implode(', ', $from) .
                    ' WHERE ' . implode(' AND ', $where) .
                    ' ORDER BY popularity DESC' .
                    ' LIMIT ' . $limit;


        $prods = $db->select($sql);

        return MagicZoomPlus_loadCategoryModule($prods, isset($matches[2]) ? $matches[2] : '');
    }

    function MagicZoomPlus_getImg($img, $thumb = false, $pid = null, $path = false) {
        $nophoto = $GLOBALS['rootRel'] . 'skins/' . SKIN_FOLDER . '/styleImages/thumb_nophoto.gif';

        $tool = & $GLOBALS["magictoolbox"]["magiczoomplus"];

        if(empty($img)) {
            // return 'nophoto' thumb when image is not available
            return $nophoto;
        }
        if(empty($pid)) $pid = null;
        $imgLink = $GLOBALS['rootRel'] . 'images/uploads/' . $img;
        $imgPath = CC_ROOT_DIR . str_replace('/', CC_DS, '/images/uploads/' . $img);

        if(!file_exists($imgPath)) {
            return $nophoto;
        }

        if ($thumb) {

            require_once(dirname(__FILE__) . CC_DS . 'magictoolbox.imagehelper.class.php');
            $helper = new MagicToolboxImageHelperClass(CC_ROOT_DIR, '/images/uploads/magictoolbox_cache', $tool->params, null, $GLOBALS['rootRel']);
            $thumbLink = $helper->create('/images/uploads/' . $img, $thumb, $pid);

            if($thumbLink == $GLOBALS['rootRel'] . '/images/uploads/' . $img) {
                $thumbPath = $imgPath;
            }

            if($path) {
                return $thumbPath;
            } else {
                return $thumbLink;
            }
        }

        if($path) {
            return $imgPath;
        } else {
            return $imgLink;
        }
    }

    function MagicZoomPlus_replace($product, &$content, $cat = false, $idPref = '') {
        global $glob, $db, $lang;

        //$store = parse_url($glob['storeURL']);
        //$storeUrl = "{$store['scheme']}://{$store['host']}";

        $tool = & $GLOBALS["magictoolbox"]["magiczoomplus"];

        if(empty($product["image"])) {
            return;
        }

        $img = MagicZoomPlus_getImg($product["image"], false, $product['productId']);
        $img_o = MagicZoomPlus_getImg($product["image"], 'original', $product['productId']);
        if(!$img) {
            return false;
        }

        $thumb = MagicZoomPlus_getImg($product["image"], 'thumb', $product['productId']);

        $title = $product['name'];
        $description = $product['description'];

        $pImgs = Array(
            // img rel
            preg_replace("/^" . preg_quote($glob['rootRel'], "/") . "/is", "", $img),
            // img full
            $img,
            // thumb rel
            preg_replace("/^" . preg_quote($glob['rootRel'], "/") . "/is", "", preg_replace('/\/([^\/]+)$/is', '/thumbs/thumb_$1', $img)),
            // thumb full
            preg_replace('/\/([^\/]+)$/is', '/thumbs/thumb_$1', $img)
        );

        $pattern = "<img[^>]*src=\"__PIMG__\"[^>]*(?:(?:>)|(?:\/>)|(?:>[^<]*<\/img>))";
	    /*$pattern = "<img[^>]*id=\"MainProdImage\".*?src=\"__PIMG__\"[^>]*(?:(?:>)|(?:\/>)|(?:>[^<]*<\/img>))";*/
        if($cat) {
            $pattern = '(?:<a[^>]*?viewProd[^>]+?>)' . $pattern . '(?:<\/a>)';
        }
        $pattern = "/{$pattern}/is";

        if($cat && $tool->params->checkValue('link-to-product-page', 'Yes')) {
            $link = $GLOBALS['rootRel'] . 'index.php?' . (CC_MTV == 4 ? '_a' : 'act') . '=viewProd&productId=' . intval($product['productId']);
        } else { $link = ''; }


        $replace = $tool->template(array(
            "id" => $cat ? $idPref : $product['productId'],
            "group" => $cat ? $idPref : $product['productId'],
            "img" => $img_o,
            "title" => $title,
            "description" => $description,
            "thumb" => $thumb,
            "link" => $link
        ));
        $replace = str_replace("<a ", "<a  style=\"margin-left:auto;margin-right:auto;\" ", $replace);

        /*$GLOBALS["magictoolbox"]["magiczoomplus_replace"] = '<div class="MagicToolboxContainer">' . $replace . '</div>';
        foreach($pImgs as $pImg) {
            $GLOBALS["magictoolbox"]["magiczoomplus_replace_status"] = false;
            $content = preg_replace_callback(str_replace("__PIMG__", preg_quote($pImg, "/"), $pattern), "MagicZoomPlus_replace_callback", $content);
            if($GLOBALS["magictoolbox"]["magiczoomplus_replace_status"] === true) {
                unset($GLOBALS["magictoolbox"]["magiczoomplus_replace_status"]);
                break;
            }
        }
        unset($GLOBALS["magictoolbox"]["magiczoomplus_replace"]);*/




        /* more images */
        $results = $db->select("SELECT img FROM ".$glob['dbprefix']."CubeCart_img_idx WHERE productId = ".$db->mySQLsafe($product['productId']));
        if(!is_array($results)) {
            $results = array();
        }
        $mainImage = $db->select("SELECT image FROM ".$glob['dbprefix']."CubeCart_inventory WHERE productId = ".$db->mySQLsafe($product['productId']));
        if(!is_array($mainImage)) {
            $mainImage = array();
        }

        //$showMessage = $tool->params->getValue('show-message');
        //$tool->params->set('show-message', 'No');

        //$images = array_merge($results, $mainImage);

        $html = Array();
        $thumbs = Array();

        if(count($results) > 0) {

            $images = array_merge($mainImage, $results);


            //$html[] = '<span style="clear:both;display:block;margin:15px auto 3px;">' . trim(str_replace("[+]", "", $lang['front']['viewProd']['more_images'])) . '</span>';

            foreach($images as $img) {
                if(isset($img['img'])) $image = $img['img'];
                elseif(isset($img['image'])) $image = $img['image'];
                else continue;

                $image = str_replace("images/uploads/","",$image);

                $img = MagicZoomPlus_getImg($image, 'original', $product['productId']);
                $medium = MagicZoomPlus_getImg($image, 'thumb', $product['productId']);
                $thumb = MagicZoomPlus_getImg($image, 'selector', $product['productId']);


                $i = $tool->subTemplate(array(
                    "id" =>



                        ($cat ? $idPref : $product['productId'])



                        ,
                    "img" => $img,
                    "medium" => $medium,
                    "thumb" => $thumb,
                ));
                //$i = str_replace("<a ", "<a style=\"margin:2px 3px;\" ", $i);
                $i = str_replace("<img ", "<img style=\"border:0;\" ", $i);
                //$html[] = $i;
                $thumbs[] = $i;
                //$html[] = "<a style=\"margin:2px 3px;\" href=\"{$img}\" rel=\"mzProduct{$product['productId']}\" rev=\"{$thumb}\"><img {$w}style=\"border:0;\" src=\"{$thumb}\"></a>";



            }
        }


        require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'magictoolbox.templatehelper.class.php');
        MagicToolboxTemplateHelperClass::setPath(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'templates');
        MagicToolboxTemplateHelperClass::setOptions($tool->params);

        if(!$cat && !$tool->params->checkValue('template', 'original')) {
            $replace = MagicToolboxTemplateHelperClass::render(array(
                'main' => $replace,
                'thumbs' => $thumbs,
                'pid' => $product['productId'],
            ));
            $html = '';
        } else {
            $html = '<span style="clear:both;display:block;margin:15px auto 3px;">' . trim(str_replace("[+]", "", $lang['front']['viewProd']['more_images'])) . '</span>' . implode("", $thumbs);
            if(strlen($html) > 0) {
                $html = '<div class="MagicToolboxSelectorsContainer' .
                    MagicToolboxTemplateHelperClass::prepareMagicScrollClass() .
                    '">' . $html . '</div>';
            }
        }

        $GLOBALS["magictoolbox"]["magiczoomplus_replace"] = $replace;
        foreach($pImgs as $pImg) {
            $GLOBALS["magictoolbox"]["magiczoomplus_replace_status"] = false;
            $content = preg_replace_callback(str_replace("__PIMG__", preg_quote($pImg, "/"), $pattern), "MagicZoomPlus_replace_callback", $content);
            if($GLOBALS["magictoolbox"]["magiczoomplus_replace_status"] === true) {
                unset($GLOBALS["magictoolbox"]["magiczoomplus_replace_status"]);
                break;
            }
        }
        unset($GLOBALS["magictoolbox"]["magiczoomplus_replace"]);


        //$tool->params->set('show-message', $showMessage);
        /*if($tool->params->checkValue('show_message', 'Yes') && !$tool->params->checkValue('message', '')) {
            $html .= '<div style="text-align:center;">' . $tool->params->getValue('message') . '</div>';
        }*/

        $content = preg_replace('/<a[^>]*?openPopUp[^>]*?>' . preg_quote((isset($lang['front']['viewProd']['more_images'])?$lang['front']['viewProd']['more_images']:$lang['viewProd']['popup_more_images']), '/') . '<\/a>/is', $html, $content);
        $content = preg_replace("/<a[^>]*?href\=\"[^\"]+?index\.php\?_g=ex(\&|\&amp\;)_a\=prodImages(\&|\&amp\;)productId=".$product['productId'].".*?\"[^>]*onclick=\"openPopUp\(\s*this\.href.*?>.*?<\/a>/is", $html, $content);
        $content = preg_replace("/<div ?id=\"imgThumbSpace\"[^>]*>(.*?)<\/div>/is",$html,$content);

        //<a href="javascript:openPopUp('extra/prodImages.php?productId={PRODUCT_ID}', 'images', 548, 455, 0);" class="txtDefault">{LANG_MORE_IMAGES}</a>
    }

    function MagicZoomPlus_replace_callback($matches) {
        if(!isset($GLOBALS["magictoolbox"]["magiczoomplus_replace"])) return $matches[0];
        $class = preg_replace("/^.*?<a.*?class=[\'\"](.*?)[\'\"].*$/is","$1",$matches[0]);
        //print "!" . $class . "!\n\n\n";
        if($class == "MagicZoomPlus") return $matches[0];
        else {
            $GLOBALS["magictoolbox"]["magiczoomplus_replace_status"] = true;
            return $GLOBALS["magictoolbox"]["magiczoomplus_replace"];
        }
    }

?>
