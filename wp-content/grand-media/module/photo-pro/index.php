<?php
$module_info = array(
	'base' => 'photo-pro',
	'name' => 'photo-pro',
	'title' => 'PhotoPro',
	'version' => '2.1',
	'author' => 'CodEasily.com',
	'description' => 'Multi-categorized professional image gallery module with slideshow feature. PhotoPro module can scale the image for beautiful slideshow with image scroll effect',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-photo-pro/',
	'download' => 'http://codeasily.com/download/photo-pro-module-zip/',
	'dependencies' => 'swfobject,swfaddress'
);
if(isset($_GET['info'])){
	echo '<pre>' . print_r($module_info, true) . '</pre>';
} elseif(preg_match('#' . basename(dirname(__FILE__)).'/'.basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header("Location: {$module_info['demo']}");
	die();
}