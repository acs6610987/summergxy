<?php
$module_info = array(
	'base' => 'mosaic',
	'name' => 'mosaic',
	'title' => 'Mosaic',
	'version' => '2.4',
	'author' => 'Thiefon',
	'description' => 'Mosaic Module transform your gallery into a visually-striking design piece by giving it a fresh masonry layout worthy of your favorite design blog',
	'type' => 'gallery',
	'status' => 'premium',
	'price' => '$20',
	'demo' => 'http://codeasily.com/portfolio-item/gmedia-mosaic/',
	'download' => 'http://codeasily.com/download/mosaic-module-zip/',
	'dependencies' => ''
);
if (preg_match('#' . basename(dirname(__FILE__)) . '/' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) {
	if (isset($_GET['info'])) {
		echo '<pre>' . print_r($module_info, true) . '</pre>';
	} else {
		header("Location: {$module_info['demo']}");
		die();
	}
}