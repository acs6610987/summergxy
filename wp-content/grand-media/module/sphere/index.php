<?php
$module_info = array(
	'base' => 'sphera',
	'name' => 'sphere',
	'title' => 'Sphere',
	'version' => '4.8',
	'author' => 'CodEasily.com',
	'description' => 'Sphere 3D Skin arranges your images in beautiful sphere which rotates and interacts on your mouse move. You can also rearrange images in the wall',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-sphere/',
	'download' => 'http://codeasily.com/download/sphere-module-zip/',
	'dependencies' => 'swfobject,swfaddress'
);
if(isset($_GET['info'])){
	echo '<pre>' . print_r($module_info, true) . '</pre>';
} elseif(preg_match('#' . basename(dirname(__FILE__)).'/'.basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header("Location: {$module_info['demo']}");
	die();
}