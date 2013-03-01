<?php
/*
+--------------------------------------------------------------------------
|   CubeCart 5
|   ========================================
|	CubeCart is a registered trade mark of Devellion Limited
|   Copyright Devellion Limited 2006. All rights reserved.
|	License Type: CubeCart is NOT Open Source Software and Limitations Apply
|   Licence Info: http://www.cubecart.com/site/faq/license.php
+--------------------------------------------------------------------------
*/

if (!defined('CC_INI_SET')) die('Access Denied');

global $glob, $lang, $admin_data;
## test data
$exmaple_mode = false;
## Save notes
if (isset($_POST['notes']['dashboard_notes']) && !empty($_POST['notes']['dashboard_notes'])) {
	$update = array('dashboard_notes' => $_POST['notes']['dashboard_notes']);
	if ($GLOBALS['db']->update('CubeCart_admin_users', $update, array('admin_id' => Admin::getInstance()->get('admin_id')))) {
		$GLOBALS['session']->delete('', 'admin_data');
		$GLOBALS['main']->setACPNotify($lang['dashboard']['notice_notes_save']);
	} else {
		$GLOBALS['main']->setACPWarning($lang['dashboard']['error_notes_save']);
	}
	httpredir(currentPage());
}

## Check if setup folder remains after install/upgrade
if ($glob['installed'] && file_exists(CC_ROOT_DIR.CC_DS.'setup')) {
	$GLOBALS['main']->setACPWarning($lang['dashboard']['error_setup_folder'],true,false);
}
## Are they using the mysql root user?
if ($glob['dbusername'] == 'root' && !$GLOBALS['config']->get('config', 'debug')) {
	$GLOBALS['main']->setACPWarning($lang['dashboard']['error_mysql_root'],true,false);
}
## Windows only - Is global.inc.php writable?
if (substr(PHP_OS, 0, 3) !== 'WIN' && is_writable('includes'.CC_DS.'global.inc.php')) {
	$GLOBALS['main']->setACPWarning($lang['dashboard']['error_global_risk'],true,false);
}

$mysql_mode = $GLOBALS['db']->misc('SELECT @@sql_mode;');
if(stristr($mysql_mode[0]['@@sql_mode'], 'strict')) {
	$GLOBALS['main']->setACPWarning($lang['setup']['error_strict_mode']);
}

## Check current version
if (!isset($_SESSION['version-check']) && $request = new Request('cp.cubecart.com', '/licence/version/'.CC_VERSION)) {
	$request->cache(true);
	$request->setData(array('version' => CC_VERSION));
	if (($response = $request->send()) !== false) {
		if (version_compare(trim($response), CC_VERSION, '>')) {
			$GLOBALS['main']->setACPWarning(sprintf($lang['dashboard']['error_version_update'], $response, CC_VERSION).' <a href="?_g=maintenance&amp;node=index#upgrade">'.$lang['maintain']['upgrade_now'].'</a>');
		}
		$_SESSION['version-check'] = true;
	}
}

$GLOBALS['smarty']->assign('DASH_NOTES', Admin::getInstance()->get('dashboard_notes'));

$GLOBALS['main']->wikiPage('Dashboard');
### Dashboard ###
$GLOBALS['main']->addTabControl($lang['dashboard']['title_dashboard'], 'dashboard');
## Quick Stats
if(Admin::getInstance()->permissions('statistics', CC_PERM_READ, false, false)) {
	$total_sales = $GLOBALS['db']->query('SELECT SUM(`total`) as `total_sales` FROM `'.$GLOBALS['config']->get('config', 'dbprefix').'CubeCart_order_summary` WHERE `status` = 3;');
	$quick_stats['total_sales'] = $exmaple_mode ? '$650,390' : Tax::getInstance()->priceFormat((float)$total_sales[0]['total_sales']);
	
	$ave_order 	= $GLOBALS['db']->query('SELECT AVG(`total`) as `ave_order` FROM `'.$GLOBALS['config']->get('config', 'dbprefix').'CubeCart_order_summary` WHERE `status` = 3;');
	$quick_stats['ave_order'] = $exmaple_mode ? '$254.21' : Tax::getInstance()->priceFormat((float)$ave_order[0]['ave_order']);
	
	$this_year 			= date('Y');
	$this_month 		= date('m');
	$this_month_start 	= mktime (0, 0, 0, $this_month, '01', $this_year);
	## Work out prev month looks silly but should stop -1 month on 1st March returning January (28 Days in Feb)
	$last_month 		= date('m',strtotime("-1 month", mktime(12,0,0,$this_month,15,$this_month)));
	$last_year 			= ($last_month < $this_month) ? $this_year : ($this_year - 1);
	$last_month_start 	= mktime (0, 0, 0, $last_month, '01', $last_year);
	
	$last_month_sales 	= $GLOBALS['db']->query('SELECT SUM(`total`) as `last_month` FROM `'.$GLOBALS['config']->get('config', 'dbprefix').'CubeCart_order_summary` WHERE `status` = 3 AND `order_date` > '.$last_month_start.' AND `order_date` < '.$this_month_start.';');
	$quick_stats['last_month'] = $exmaple_mode ? '$47,672' : Tax::getInstance()->priceFormat((float)$last_month_sales[0]['last_month']);
	
	$this_month_sales 	= $GLOBALS['db']->query('SELECT SUM(`total`) as `this_month` FROM `'.$GLOBALS['config']->get('config', 'dbprefix').'CubeCart_order_summary` WHERE `status` = 3 AND `order_date` > '.$this_month_start.';');
	$quick_stats['this_month'] = $exmaple_mode ? '$53,103' : Tax::getInstance()->priceFormat((float)$this_month_sales[0]['this_month']);
	
	$GLOBALS['smarty']->assign('QUICK_STATS', $quick_stats);
}
## Last 5 orders
if (($last_orders = $GLOBALS['db']->select('CubeCart_order_summary', array('cart_order_id', 'first_name', 'last_name', 'name'), false, array('order_date' => 'DESC'), 5)) !== false) {
	$GLOBALS['smarty']->assign('LAST_ORDERS', $last_orders);
}

## Quick Tasks
$date_format = "Y-m-d";
$today		 = date($date_format);
$quick_tasks['today'] 		= urlencode(date($date_format));
$quick_tasks['this_weeks']	= urlencode(date($date_format, strtotime("last monday")));
foreach ($GLOBALS['hooks']->load('admin.dashboard.quick_tasks') as $hook) include $hook;
$GLOBALS['smarty']->assign('QUICK_TASKS',$quick_tasks);

## Statistics (Now using OFC)
/* defunct as it just subtracts 31 days from current possibility of missing Feb on March 1st/2nd!! (goto line 67)
$last_month	= strtotime('Last Month');
*/

$sales = $GLOBALS['db']->select('CubeCart_order_summary', array('order_date', 'total'), array('order_date' => '>='.mktime(0,0,0,date('m', $last_month_start),1,date('Y', $last_month_start)), 'status' => array(3), 'total' => '>0'));
$data= array();
if($sales) { ## Get data to put in chart
	foreach ($sales as $sale) {
		$month	= date('m', $sale['order_date']);
		$date	= date('d', $sale['order_date']);
		if (isset($data[(int)$month][(int)$date])) {
			$data[(int)$month][(int)$date] += $sale['total'];
		} else {
			$data[(int)$month][(int)$date] = $sale['total'];
		}
	}
} else { ## Give it some null data to prevent errors
	$data[0][0] = 0;
}
include CC_INCLUDES_DIR.'lib'.CC_DS.'OFC'.CC_DS.'open-flash-chart.php';
$chart	= new open_flash_chart();
$this_month = strftime('%B',strtotime('this month'));
$last_month = strftime('%B',strtotime('last month'));

## Set title
$title = new title($lang['dashboard']['title_sales_stats'].': '.$last_month.' / '.$this_month);
$title->set_style( "{font-family:Helvetica, Arial, sans-serif; font-size: 14px;}" );
$chart->set_title( $title );

$chart->set_bg_colour('#FFFFFF');
$colours	= array('#3030D0', '#D03030');
$loop		= 0;
$max		= 100;

foreach ($data as $month => $days) {
	// unset($label);
	$timestamp	= mktime(0,0,0,$month);
	$month_name	= date('F', $timestamp);
	$month_days	= date('t', $timestamp);

	$bar	= new bar_glass();
	if(!empty($month)) $bar->key($month_name, 10 );
	for ($i=1;$i<=$month_days;$i++) {
		$max		= (isset($days[$i]) && $days[$i] > $max) ? $days[$i] : $max;
		$values[]	= (isset($days[$i])) ? (float)$days[$i] : null;
	}

	$bar->set_colour($colours[$loop++]);
	$bar->set_values($values);

	$bar->set_tooltip($month_name.' #x_label#: #val#');

	$chart->add_element($bar);
	unset($bar, $values);
	$month_length[] = $month_days;
}

## Set up Y-Axis
$max	= sigfig($max, 2);
$y_axis	= new y_axis();
$y_axis->set_range(0, $max, ceil($max/10));

## Set up X-Axis labels
$x_axis		= new x_axis();
for ($i=1;$i<=max($month_length);$i++) $labels[] = (string)$i;
$x_axis->set_labels_from_array($labels);

## Assign settings to OFC
$chart->set_x_axis($x_axis);
$chart->set_y_axis($y_axis);

## Set X-Axis Legend
$x_legend = new x_legend($lang['dashboard']['title_day_of_month']);
$x_legend->set_style('{font-family:Helvetica, Arial, sans-serif; font-size: 10px; color: #000000}');
$chart->set_x_legend( $x_legend );

## Set Y-Axis Legend
$y_legend = new y_legend(sprintf($lang['dashboard']['title_sales_volume'], $GLOBALS['config']->get('config', 'default_currency')));
$y_legend->set_style('{font-family:Helvetica, Arial, sans-serif; font-size: 10px; color: #000000}');
$chart->set_y_legend( $y_legend );

// example data that looks pretty
$example_data = '{"elements":[{"type":"bar_glass","colour":"#3030D0","values":[1856,2084,2077,2821,3545,2522,2233,2934,3234,3157,3477,2577,3277,4122,3700,3900,4088,4323,3700,2655,2456,3184,3377,3121,3745,3722,3933,4677,4999,5000,4899],"tip":"December #x_label#: #val#"},{"type":"bar_glass","colour":"#D03030","values":[2056,2384,2277,2721,3345,2322,2433,3234,3434,3657,3877,2977,2677,3822,4100,4300,4388,4523,3100,2655,2456,3784,3977,3921,3700,2722,2633,4877,4666,4564,5000],"tip":"December #x_label#: #val#"}],"title":{"text":"Sales Statistics: March \/ April","style":"{font-family:Helvetica, Arial, sans-serif; font-size: 14px;}"},"bg_colour":"#FFFFFF","x_axis":{"labels":{"labels":["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"]}},"y_axis":{"min":0,"max":5000,"steps":10},"x_legend":{"text":"Day of the month","style":"{font-family:Helvetica, Arial, sans-serif; font-size: 10px; color: #000000}"},"y_legend":{"text":"Sales Volume (USD)","style":"{font-family:Helvetica, Arial, sans-serif; font-size: 10px; color: #000000}"}}';

$GLOBALS['smarty']->assign('CHART_DATA', $exmaple_mode ? $example_data : $chart->toString());

## Pending Orders Tab
$page		= (isset($_GET['orders'])) ? $_GET['orders'] : 1;
$unsettled_count 	= $GLOBALS['db']->count('CubeCart_order_summary', 'cart_order_id', array('status' => array(1,2)));
$results_per_page = 25;
$unsettled_orders = $GLOBALS['db']->select('CubeCart_order_summary', array('cart_order_id', 'name', 'first_name', 'last_name', 'order_date', 'customer_id', 'total', 'status'), 'status IN (1,2) OR `dashboard` = 1', '`dashboard` DESC, `status` DESC,`order_date` ASC', $results_per_page, $page);

if ($unsettled_orders) {
	$tax = Tax::getInstance();
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_orders_unsettled'], 'orders', null, null, $unsettled_count);
	foreach ($unsettled_orders as $order) {
		if (($notes = $GLOBALS['db']->select('CubeCart_order_notes', array('cart_order_id'), array('cart_order_id' => $order['cart_order_id']))) !== false) {
			$order['notes'] = $notes[0];
		}
		$order['icon']		= (empty($order['customer_id'])) ? 'user_ghost' : 'user_registered';
		$order['date']		= formatTime($order['order_date']);
		$order['total']		= Tax::getInstance()->priceFormat($order['total']);
		$order['status']	= $lang['order_state']['name_'.$order['status']];
		$orders[] = $order;
	}
	$GLOBALS['smarty']->assign('ORDERS', $orders);
	$GLOBALS['smarty']->assign('ORDER_PAGINATION', $GLOBALS['db']->pagination($unsettled_count, $results_per_page, $page, $show = 5,'orders', 'orders', $glue = ' ', $view_all = true));
} elseif($exmaple_mode) {
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_orders_unsettled'], 'orders', null, null, '12');
}

## Product Reviews Tab
$page		= (isset($_GET['reviews'])) ? $_GET['reviews'] : 1;
if (($reviews = $GLOBALS['db']->select('CubeCart_reviews', false, array('approved' => '0'), false, 25, $page)) !== false) {
	$reviews_count = $GLOBALS['db']->count('CubeCart_reviews','id');
	
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_reviews_pending'], 'product_reviews', null, null, $reviews_count);
	foreach ($reviews as $review) {
		$product			= $GLOBALS['db']->select('CubeCart_inventory', array('name'), array('product_id' => (int)$review['product_id']));
		$review['product']	= $product[0];
		$review['date'] 	= formatTime($review['time']);
		$review['delete']	= "?_g=products&amp;node=reviews&amp;delete=".(int)$review['id'];
		$review['edit']		= "?_g=products&amp;node=reviews&amp;edit=".(int)$review['id'];
		$review['stars']	= 5;
		$review_list[] = $review;
	}
	$GLOBALS['smarty']->assign('REVIEWS', $review_list);
	$GLOBALS['smarty']->assign('REVIEW_PAGINATION', $GLOBALS['db']->pagination($reviews_count, 25, $page, $show = 5,'reviews', 'product_reviews', $glue = ' ', $view_all = true));
} elseif($exmaple_mode) {
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_reviews_pending'], 'product_reviews', null, null, 7);
}

## Error Logs Tab 
/* Removed due to cause of cronic unessesary panic and wasted support tickets from merchants. This can be accessed from the navigation menu and should only be looked at by developers.
$admin_errors = $GLOBALS['db']->count('CubeCart_admin_error_log', 'log_id', array('read' => '0','admin_id'=>Admin::getInstance()->get('admin_id')));
$system_errors = $GLOBALS['db']->count('CubeCart_system_error_log', 'log_id', array('read' => '0'));
$unread_errors = $admin_errors + $system_errors;
if($unread_errors) {
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_error_log'], null, '?_g=settings&amp;node=errorlog', null, $unread_errors);
}
*/


## Stock Warnings
$page		= (isset($_GET['stock'])) ? $_GET['stock'] : 1;
if (($stock = $GLOBALS['db']->select('CubeCart_inventory', array('name', 'stock_level', 'stock_warning', 'product_id'), 'use_stock_level = 1 AND ((stock_warning > 0 AND stock_level <= stock_warning) OR (stock_warning <= 0 AND stock_level <= '.(int)$GLOBALS['config']->get('config', 'stock_warn_level').'))', array('stock_level' => 'ASC'), 25, $page)) !== false) {
	$stock_count = count($stock);
	$GLOBALS['smarty']->assign('STOCK', $stock);
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_stock_warnings'], 'stock_warnings', null, null, $stock_count);
	$GLOBALS['smarty']->assign('STOCK_PAGINATION', $GLOBALS['db']->pagination($stock_count, $results_per_page, $page, $show = 5,'stock', 'stock_warnings', $glue = ' ', $view_all = true));
} elseif($exmaple_mode) {
	$GLOBALS['main']->addTabControl($lang['dashboard']['title_stock_warnings'], 'stock_warnings', null, null, 32);
}

## Latest News (from RSS)
if ($GLOBALS['config']->has('config', 'default_rss_feed') && !$GLOBALS['config']->isEmpty('config', 'default_rss_feed') && filter_var($GLOBALS['config']->get('config', 'default_rss_feed'), FILTER_VALIDATE_URL)) {
	$url = parse_url($GLOBALS['config']->get('config', 'default_rss_feed'));
	$path = (isset($url['query'])) ? $url['path'].'?'.$url['query'] : $url['path'];
	$request = new Request($url['host'], $path);
	$request->cache(true);
	$request->setMethod('POST');
	$request->setData('Null');
	if (($response = $request->send()) !== false) {
		try {
			if (($data = new SimpleXMLElement($response)) !== false) {
				foreach ($data->channel->children() as $key => $value) {
					if ($key == 'item') continue;
					$news[$key]	= (string)$value;
				}
				if ($data['version'] >= 2) {
					foreach ($data->channel->item as $item) {
						$news['items'][]	= array(
							'title'			=> (string)$item->title,
							'link'			=> (string)$item->link,
						);
					}
				}
				$GLOBALS['smarty']->assign('NEWS', $news);
			}
		} catch (Exception $e) {
			trigger_error($e->getMessage(), E_USER_WARNING);
		}
	}
}
$GLOBALS['main']->addTabControl($lang['dashboard']['title_store_overview'], 'advanced');

$count	= array(
	'products'	=> $GLOBALS['db']->count('CubeCart_inventory', 'product_id'),
	'orders'	=> $GLOBALS['db']->count('CubeCart_order_summary', 'cart_order_id'),
	'customers'	=> $GLOBALS['db']->count('CubeCart_customer', 'customer_id'),
);

$tmp1 = 0;
$tmp2 = 0;

$system	= array(
	'cc_version'	=> CC_VERSION,
	'cc_build'		=> null,
	'php_version'	=> PHP_VERSION,
	'mysql_version'	=> $GLOBALS['db']->serverVersion(),
	'server'		=> $_SERVER['SERVER_SOFTWARE'],
	'client'		=> $_SERVER['HTTP_USER_AGENT'],
	'dir_images'	=> dirsize(CC_ROOT_DIR.CC_DS.'images', $tmp1),
	'dir_files'		=> dirsize(CC_ROOT_DIR.CC_DS.'files', $tmp2),
);

$GLOBALS['smarty']->assign('SYS', $system);
$GLOBALS['smarty']->assign('PHP', ini_get_all());
$GLOBALS['smarty']->assign('COUNT', $count);

$GLOBALS['main']->addTabControl($lang['common']['search'], 'sidebar');

$page_content = $GLOBALS['smarty']->fetch('templates/dashboard.index.php');
