<?php
$module_info = array(
	'base' => 'slider',
	'name' => 'slider',
	'title' => 'Slider',
	'version' => '4.1',
	'author' => 'CodEasily.com',
	'description' => 'A Premium Image Slider Module with multialbums. Features: load big image in Lightbox, add link to each image, show/hide description',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-slider/',
	'download' => 'http://codeasily.com/download/slider-module-zip/',
	'dependencies' => 'swfobject,fancybox'
);
if(isset($_GET['info'])){
	echo '<pre>' . print_r($module_info, true) . '</pre>';
} elseif(preg_match('#' . basename(dirname(__FILE__)).'/'.basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header("Location: {$module_info['demo']}");
	die();
}