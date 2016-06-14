<?php
$module_info = array(
	'base' => 'green-style',
	'name' => 'green-style',
	'title' => 'GreenStyle Pro',
	'version' => '4.8',
	'author' => 'CodEasily.com',
	'description' => 'Multi-categorized professional photo gallery module with slideshow feature. Awesome wave effect when you move mouse over thumbnails will not leave anyone indifferent',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-green-style/',
	'download' => 'http://codeasily.com/download/green-style-module-zip/',
	'dependencies' => 'swfobject,swfaddress'
);
if(isset($_GET['info'])){
	echo '<pre>' . print_r($module_info, true) . '</pre>';
} elseif(preg_match('#' . basename(dirname(__FILE__)).'/'.basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header("Location: {$module_info['demo']}");
	die();
}