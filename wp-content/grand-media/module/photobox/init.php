<?php
/** @var $gmDB
 * @var  $gmCore
 * @var  $gmGallery
 * @var  $gallery
 * @var  $module
 * @var  $settings
 * @var  $terms
 * @var  $gmedia
 * @var  $is_bot
 **/
$content = array();
if(!isset($is_bot)){ $is_bot = false; }
if(!isset($shortcode_raw)){ $shortcode_raw = false; }
$i = 0;
$tab = sanitize_title($gallery['name']);
$base_url_host = parse_url($gmCore->upload['url'], PHP_URL_HOST);
foreach ( $terms as $term ) {
	foreach ( $gmedia[$term->term_id] as $item ) {
		if('image' != substr( $item->mime_type, 0, 5 )){
			continue;
		}
		$_metadata = $gmDB->get_metadata('gmedia', $item->ID, '_metadata', true);
		$link_target = '_self';
		if($item->link){
			$url_host = parse_url($item->link, PHP_URL_HOST);
			if($url_host == $base_url_host || empty($url_host)){
				$link_target = '_self';
			}	else{
				$link_target = '_blank';
			}
		}
		$content[] = array(
			'id' => $item->ID
			,'image' => "/{$gmGallery->options['folder']['image']}/{$item->gmuid}"
			,'thumb' => "/{$gmGallery->options['folder']['image_thumb']}/{$item->gmuid}"
			,'title' => $item->title
			,'text' => wpautop($item->description)
			,'media' => ''
			,'link' => $item->link
			,'linkTarget' => $link_target
		);
	}
}
if(!empty($content)){
	$settings = array_merge($settings, array(
		'ID' => $gallery['term_id'],
		'name' => $gallery['name'],
		'moduleUrl' => $module['url'],
		'pluginUrl' => $gmCore->gmedia_url,
		'libraryUrl' => $gmCore->upload['url'],
		'key' => strtolower($gmGallery->options['license_key'])
	));
	$allsettings = array_merge($module['options'], $settings);

	echo '<div id="gmediaPhotoBox_'.$gallery['term_id'].'" class="gmPhotoBox_Container">';
	if($shortcode_raw){ echo '<pre style="display:none">'; }
	?><script type="text/javascript">
		jQuery(function(){
			var data = <?php echo json_encode($settings); ?>;
			data.content = <?php echo json_encode($content); ?>;
			jQuery('#gmediaPhotoBox_<?php echo $gallery['term_id']; ?>').photobox('a', data);
		});
	</script><?php if($shortcode_raw){ echo '</pre>'; }
	if($is_bot) { ?>
		<noscript><?php
			foreach($content as $item){
				if($item['title']){
					$item['title'] = esc_attr($item['title']);
				}
				echo "<a href='{$item['image']}'><img src='{$item['thumb']}' alt='{$item['title']}' /></a>";
			}
			?></noscript>
	<?php }
	//if(empty($settings['key'])){ echo "<a class='gmlove' target='_blank' href='{$module['info']['demo']}'>".__('built with GmediaGallery', 'grand-media')."</a>"; }
	echo '</div>';
} else{
	echo GMEDIA_GALLERY_EMPTY;
}
