<?php
$module_info = array(
	'base' => 'flatwall',
	'name' => 'flatwall',
	'title' => 'FlatWall 3D',
	'version' => '3.8',
	'author' => 'CodEasily.com',
	'description' => 'FlatWall 3D module arranges your images in beautiful wall which rotates and interacts on mouse drag and mouse wheel',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-flatwall/',
	'download' => 'http://codeasily.com/download/flatwall-module-zip/',
	'dependencies' => 'swfobject,swfaddress'
);
if(isset($_GET['info'])){
	echo '<pre>' . print_r($module_info, true) . '</pre>';
} elseif(preg_match('#' . basename(dirname(__FILE__)).'/'.basename(__FILE__) . '#', $_SERVER['PHP_SELF'])){
	header("Location: {$module_info['demo']}");
	die();
}