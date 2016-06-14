<?php
$default_options = array(
    'padding'     => '2',
    'columns'     => '0',
    'min_columns' => '0',
    'max_columns' => '0',
    'width'       => '0',
    'height'      => '0',

    'links'          => '1', // bool
    'external_links' => '0', // bool

    'order' => 'rows', // rows, columns, masonry, random

    'center'       => '1', //bool
    'prevent_crop' => '0', // bool
    'show_loading' => '0', // bool

    'loading_transition'    => 'fade', // none, fade, scale-up|down, slide-top|right|bottom|left, custom
    'responsive_transition' => '1', // bool

    'modal_name'  => 'gmlightbox',
    'modal_group' => '1', // bool

    'lightbox'                     => '1', // bool
    'lightbox_mobile'              => '1', // bool
    'lightbox_theme'               => 'pp_default',
    'lightbox_show_title'          => '1',
    'lightbox_show_caption'        => '1',
    'lightbox_autoplay_slideshow'  => '0',
    'lightbox_slideshow'           => '5000',
    'lightbox_animation_speed'     => '200',
    'lightbox_opacity'             => '80',
    'lightbox_allow_resize'        => '1',
    'lightbox_allow_expand'        => '1',
    'lightbox_keyboard_shortcuts'  => '1',
    'lightbox_overlay_gallery'     => '0',
    'lightbox_overlay_gallery_max' => '30',

    'deep_links'           => '1',
    'social_share_enabled' => '1', // Social Share Enabled (true, false). Default value: true.
    'share_post_link'      => '0',
    'views_enabled'        => '1',
    'likes_enabled'        => '1',
    'comments_enabled'     => '1', // Comments Enabled (true, false). Default value: true.


    'customCSS'        => '',
    'log_gallery_data' => '0' // bool
);
$options_tree    = array(
    array(
        'label'  => 'Settings',
        'fields' => array(
            'padding'               => array(
                'label' => 'Padding',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0"',
                'text'  => 'Gap between images'
            ),
            'columns'               => array(
                'label' => 'Columns',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" data-watch="change"',
                'text'  => 'Number of columns in the gallery (0 = auto)'
            ),
            'min_columns'           => array(
                'label' => 'Min Columns',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" data-columns="is:0"',
                'text'  => 'Number of minimum columns in the gallery (0 = auto)'
            ),
            'max_columns'           => array(
                'label' => 'Max Columns',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" data-columns="is:0"',
                'text'  => 'Number of maximum columns in the gallery (0 = auto)'
            ),
            'width'                 => array(
                'label' => 'Gallery Width',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0"',
                'text'  => 'Gallery width in pixels (0 = auto)'
            ),
            'height'                => array(
                'label' => 'Gallery Height',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0"',
                'text'  => 'Gallery height in pixels (0 = auto)'
            ),
            'links'                 => array(
                'label' => 'Thumbnails clickable',
                'tag'   => 'checkbox',
                'attr'  => 'data-watch="change"',
                'text'  => 'Open big image or follow url when click on thumbnail'
            ),
            'external_links'        => array(
                'label' => 'Open Web Links in New Tab',
                'tag'   => 'checkbox',
                'attr'  => 'data-links="is:1"',
                'text'  => "Links which can't be opened in ligtbox (if it enabled) will be opened in new tab"
            ),
            'order'                 => array(
                'label'   => 'Image Order',
                'tag'     => 'select',
                'attr'    => '',
                'text'    => '',
                'choices' => array(
                    array(
                        'label' => 'Rows',
                        'value' => 'rows'
                    ),
                    array(
                        'label' => 'Columns',
                        'value' => 'columns'
                    ),
                    array(
                        'label' => 'Masonry',
                        'value' => 'masonry'
                    ),
                    array(
                        'label' => 'Random',
                        'value' => 'random'
                    )
                )
            ),
            'center'                => array(
                'label' => 'Align Center',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'prevent_crop'          => array(
                'label' => 'Prevent Crop',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'show_loading'          => array(
                'label' => 'Show Loading',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'loading_transition'    => array(
                'label'   => 'Loading Transition',
                'tag'     => 'select',
                'attr'    => '',
                'text'    => '',
                'choices' => array(
                    array(
                        'label' => 'None',
                        'value' => 'none'
                    ),
                    array(
                        'label' => 'Fade',
                        'value' => 'fade'
                    ),
                    array(
                        'label' => 'Scale Up',
                        'value' => 'scale-up'
                    ),
                    array(
                        'label' => 'Scale Down',
                        'value' => 'scale-down'
                    ),
                    array(
                        'label' => 'Slide Top',
                        'value' => 'slide-up'
                    ),
                    array(
                        'label' => 'Slide Bottom',
                        'value' => 'slide-down'
                    ),
                    array(
                        'label' => 'Slide Left',
                        'value' => 'slide-left'
                    ),
                    array(
                        'label' => 'Slide Right',
                        'value' => 'slide-right'
                    ),
                    array(
                        'label' => 'Custom',
                        'value' => 'custom'
                    )
                )
            ),
            'responsive_transition' => array(
                'label' => 'Responsive Transition',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            )
        )
    ),
    array(
        'label'  => 'Lightbox Settings',
        'fields' => array(
            'lightbox'                     => array(
                'label' => 'Open Links in Lightbox',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => 'Link will be opened in lightbox if it is image file, Youtube video, Vimeo, files with ext: .swf, .mov, .mp4, .webm, .mp3, .ogg, .pdf. Any link can be opened in iframe if it has "iframe=true" query. Also inline content block can be injected by anchor.'
            ),
            'lightbox_mobile'              => array(
                'label' => 'Use Lightbox on Mobile Devices',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'lightbox_theme'               => array(
                'label'   => 'prettyPhoto Theme',
                'tag'     => 'select',
                'attr'    => '',
                'text'    => 'Choose lightbox theme',
                'choices' => array(
                    array(
                        'label' => 'Default',
                        'value' => 'pp_default'
                    ),
                    array(
                        'label' => 'Dark Rounded',
                        'value' => 'dark_rounded'
                    ),
                    array(
                        'label' => 'Dark Square',
                        'value' => 'dark_square'
                    ),
                    array(
                        'label' => 'Light Rounded',
                        'value' => 'light_rounded'
                    ),
                    array(
                        'label' => 'Light Square',
                        'value' => 'light_square'
                    ),
                    array(
                        'label' => 'Facebook',
                        'value' => 'facebook'
                    )
                )
            ),
            'lightbox_show_title'          => array(
                'label' => 'Show Lightbox Title',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'lightbox_show_caption'        => array(
                'label' => 'Show Lightbox Caption',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'deep_links'                   => array(
                'label' => 'Deep Links',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'social_share_enabled'         => array(
                'label' => 'Social Share Buttons',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'share_post_link'              => array(
                'label' => 'Share Link to Item Post',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'views_enabled'                => array(
                'label' => 'Show Views Counter',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'likes_enabled'                => array(
                'label' => 'Show Likes Button',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'comments_enabled'             => array(
                'label' => 'Show Comments Count',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => 'The comments link will open item\'s Post in new tab'
            ),
            'lightbox_autoplay_slideshow'  => array(
                'label' => 'Autoplay Slideshow in Lightbox',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'lightbox_slideshow'           => array(
                'label' => 'Slideshow Delay (ms)',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" step="100"',
                'text'  => ''
            ),
            'lightbox_animation_speed'     => array(
                'label' => 'Lightbox Animation Speed (ms)',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" step="10"',
                'text'  => ''
            ),
            'lightbox_opacity'             => array(
                'label' => 'Lightbox Overlay Opacity',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0" max="100"',
                'text'  => ''
            ),
            'lightbox_allow_resize'        => array(
                'label' => 'Lightbox Allow Resize',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => 'Resize the photos bigger than viewport'
            ),
            'lightbox_allow_expand'        => array(
                'label' => 'Lightbox Allow Expand',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => 'Allow the user to expand a resized image'
            ),
            'lightbox_keyboard_shortcuts'  => array(
                'label' => 'Lightbox Keyboard Shortcuts',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'lightbox_overlay_gallery'     => array(
                'label' => 'Lightbox Overlay Gallery',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => 'If set to true, a gallery will overlay the fullscreen image on mouse over'
            ),
            'lightbox_overlay_gallery_max' => array(
                'label' => 'Lightbox Overlay Gallery Max Items',
                'tag'   => 'input',
                'attr'  => 'type="number" min="0"',
                'text'  => 'Maximum number of pictures in the gallery to show lightbox thumbs'
            ),
        )
    ),
    array(
        'label'  => 'Advanced Settings',
        'fields' => array(
            'modal_name'       => array(
                'label' => 'Modal Name',
                'tag'   => 'input',
                'attr'  => 'type="text"',
                'text'  => ''
            ),
            'modal_group'      => array(
                'label' => 'Modal Group',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'log_gallery_data' => array(
                'label' => 'Log Gallery Data',
                'tag'   => 'checkbox',
                'attr'  => '',
                'text'  => ''
            ),
            'customCSS'        => array(
                'label' => 'Custom CSS',
                'tag'   => 'textarea',
                'attr'  => 'cols="20" rows="10"',
                'text'  => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i><br />This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, anything you add here will override the default styles'
            )
            /*,
            'loveLink' => array(
                'label' => 'Display LoveLink?',
                'tag' => 'checkbox',
                'attr' => '',
                'text' => 'Selecting "Yes" will show the lovelink icon (codeasily.com) somewhere on the gallery'
            )*/
        )
    )
);
