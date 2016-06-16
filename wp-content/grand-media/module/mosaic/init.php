<?php
/** @var $gmDB
 * @var  $gmCore
 * @var  $gmGallery
 * @var  $gallery
 * @var  $module
 * @var  $settings
 * @var  $terms
 * @var  $gmedia
 * @var  $is_mob
 * @var  $is_bot
 **/


$content = array();
if(!isset($is_mob)) {
    $is_mob = false;
}
if(!isset($is_bot)) {
    $is_bot = false;
}
if(!isset($shortcode_raw)) {
    $shortcode_raw = false;
}
foreach($terms as $term) {
    foreach($gmedia[$term->term_id] as $item) {
        $type = explode('/', $item->mime_type);
        $type = $type[0];
        $ext  = pathinfo($item->gmuid, PATHINFO_EXTENSION);

        $meta      = $gmDB->get_metadata('gmedia', $item->ID);
        $_metadata = isset($meta['_metadata'])? $meta['_metadata'][0] : array();

        $thumb = $gmCore->gm_get_media_image($item, 'thumb', true);
        $web   = $gmCore->gm_get_media_image($item, 'web', true);

        if(isset($_metadata['web'])) {
            $width  = $_metadata['web']['width'];
            $height = $_metadata['web']['height'];
        } else {
            if(!isset($img_size[$web])) {
                $img_size[$web] = getimagesize($web);
            }
            $width  = $img_size[$web][0];
            $height = $img_size[$web][1];
        }
        if($item->post_id) {
            $cc = wp_count_comments($item->post_id);
            $cc = $cc->approved;
        } else {
            $cc = 0;
        }

        $content[] = array(
                'id'        => $item->ID,
                'type'      => $type,
                'ext'       => strtolower($ext),
                'src'       => "/{$gmGallery->options['folder'][$type]}/{$item->gmuid}",
                'sizes'     => array(
                        'thumb' => $thumb,
                        'full'  => $web,
                ),
                'alt'       => $item->title,
                'caption'   => str_replace(array("\r\n", "\r", "\n"), '', wpautop($item->description)),
                'url'       => $item->link,
                'post_link' => get_permalink($item->post_id),
                'cc'        => $cc,
                'views'     => empty($meta['views'][0])? 0 : (int)$meta['views'][0],
                'likes'     => empty($meta['likes'][0])? 0 : (int)$meta['likes'][0],
                //'date'    => $item->date,
                'width'     => $width,
                'height'    => $height
        );
    }
}

if(!empty($content)) {
    $settings = array_merge($settings, array(
            'ID'            => $gallery['term_id'],
            'name'          => $gallery['name'],
            'is_mobile'     => $is_mob,
            'module_dirurl' => $module['url']
    ));
    if(isset($settings['modal_name']) && empty($settings['modal_name'])) {
        $settings['modal_name'] = 'gmlightbox';
    }
    $allsettings   = array_merge($module['options'], $settings);
    $json_settings = json_encode($settings);
    ?>
    <div id="mosaic_ID<?php echo $gallery['term_id']; ?>" class="gmMosaic_Container" data-gmid="<?php echo $gallery['term_id']; ?>"><?php
        /*if(empty($gmGallery->options['license_key'])) {
            echo "<a class='gmlove' target='_blank' href='{$module['info']['demo']}'>" . __('built with GmediaGallery', 'grand-media') . "</a>";
        }*/
        /*if($is_bot) {*/ ?>
        <noscript><?php
            foreach($content as $item) {
                if($item['alt']) {
                    $item['alt'] = esc_attr($item['alt']);
                }
                $url = $item['url']? $item['url'] : $item['sizes']['full'];
                echo "<a href='{$url}'><img src='{$item['sizes']['thumb']}' alt='{$item['alt']}' /></a>";
            }
            ?></noscript><?php
        /*}*/ ?></div>
    <?php
    if($shortcode_raw) {
        echo '<pre style="display:none">';
    }
    ?>
    <script type="text/javascript">
        jQuery(function($) {
            var settings = <?php echo $json_settings; ?>;
            var gmedia_mosaic_content = <?php echo json_encode($content); ?>;
            settings.gallery = gmedia_mosaic_content;
            $('#mosaic_ID<?php echo $gallery['term_id']; ?>').gmediaMosaic(settings);
        });
    </script><?php if($shortcode_raw) {
        echo '</pre>';
    } ?>
    <?php
} else {
    echo GMEDIA_GALLERY_EMPTY;
}
