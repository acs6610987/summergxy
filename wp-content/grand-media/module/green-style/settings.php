<?php
$default_options = array(
	'maxwidth' => '0',
	'lockheight' => '1',
	'height' => '500',
	'maxheight' => '0',
  'property0' => 'opaque',
	'property1' => '272727',
	'property5' => '1',
	'property2' => '10',
	'property6' => '000000',
	'property7' => '75c30f',
	'property8' => 'ffffff',
	'property15' => '75c30f',
	'property16' => 'ffffff',
	'imageBorderColor' => '565f68',
	'infoButtonBgColor' => '292e32',
	'infoButtonTxtColor' => 'ffffff',
	'backButtonColorBg' => '000000',
	'backButtonColorText' => 'ffffff',
	'thumbColor' => 'ffffff',
	'thumbColorOver' => '565f68',
	'thumbnailsText' => 'THUMBNAILS',
	'slideshowText' => 'SLIDESHOW',
	'fullscreenText' => 'FULLSCREEN',
	'scrollSpeed' => '50',
	'borderSize' => '4',
	'customCSS' => ''
);
$options_tree = array(
	array(
		'label' => 'Common Settings',
		'fields' => array(
			'maxwidth' => array(
				'label' => 'Max-Width',
				'tag' => 'input',
				'attr' => 'type="number" min="0"',
				'text' => 'Set the maximum width of the gallery. Leave 0 to disable max-width.'
			),
			'lockheight' => array(
				'label' => 'Set height manually',
				'tag' => 'checkbox',
				'attr' => 'data-watch="change"',
				'text' => 'By default a gallery automatically calculates own height to best fit the tallest image in a gallery.'
			),
			'height' => array(
				'label' => 'Height',
				'tag' => 'input',
				'attr' => 'type="text" min="0" data-lockheight="is:1"',
				'text' => 'Set height of the gallery. Do not set % unless you know what you doing.'
			),
			'maxheight' => array(
				'label' => 'Max-Height',
				'tag' => 'input',
				'attr' => 'type="number" min="0" data-lockheight="is:0"',
				'text' => 'Set the maximum height of the gallery. Leave 0 to disable max-height.'
			),
			'property5' => array(
				'label' => 'AutoSlideshow',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => ''
			),
			'property2' => array(
				'label' => 'Slideshow Delay',
				'tag' => 'input',
				'attr' => 'type="number" min="1" max="60"',
				'text' => 'Set delay between slides in seconds'
			),
			'property0' => array(
				'label' => 'Wmode for flash object',
				'tag' => 'select',
				'attr' => 'data-watch="change"',
				'text' => 'Default value: Opaque. If \'transparent\' - "Background Color" option is ignored, but you can position the absolute elements over the flash',
				'choices' => array(
					array(
						'label' => 'Opaque',
						'value' => 'opaque'
					),
					array(
						'label' => 'Window',
						'value' => 'window'
					),
					array(
						'label' => 'Transparent',
						'value' => 'transparent'
					)
				)
			),
			'property1' => array(
				'label' => 'Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color" data-property0="not:transparent"',
				'text' => 'Set gallery background color'
			),
			'property6' => array(
				'label' => 'Bars Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'CDATA[Background color for Categories bar, Thumbnails bar and Scroll bar.'
			),
			'scrollSpeed' => array(
				'label' => 'Scrolling Speed (Thumbnails)',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="200"',
				'text' => ''
			),
			'thumbnailsText' => array(
				'label' => 'THUMBNAILS',
				'tag' => 'input',
				'attr' => 'type="text"',
				'text' => 'THUMBNAILS Button Name'
			),
			'slideshowText' => array(
				'label' => 'SLIDESHOW',
				'tag' => 'input',
				'attr' => 'type="text"',
				'text' => 'SLIDESHOW Button Name'
			),
			'fullscreenText' => array(
				'label' => 'FULLSCREEN',
				'tag' => 'input',
				'attr' => 'type="text"',
				'text' => 'FULLSCREEN Button Name'
			),
			'imageBorderColor' => array(
				'label' => 'Image Border Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'borderSize' => array(
				'label' => 'Image Border Size',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="30"',
				'text' => ''
			),
			'infoButtonBgColor' => array(
				'label' => 'Info Button Bg Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'infoButtonTxtColor' => array(
				'label' => 'Info Button Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property7' => array(
				'label' => 'Category Buttons Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property8' => array(
				'label' => 'Category Buttons Color on Mouseover',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color" ',
				'text' => ''
			),
			'thumbColor' => array(
				'label' => 'Thumbnails Border Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'thumbColorOver' => array(
				'label' => 'Selected Thumbnail - Border Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),			
			'property15' => array(
				'label' => 'Image Title Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Color of text for image title in the description.'
			),
			'property16' => array(
				'label' => 'Image Description Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Color of text for image description.'
			),
			/*,
			'backButtonColorText' => array(
				'label' => 'Back Button Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => '(only for Full Window template). Default: ffffff'
			),
			'backButtonColorBg' => array(
				'label' => 'Back Button Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'desc'  => '(only for Full Window template). Default: 000000'
			)*/
		)
	),
	array(
		'label' => 'Advanced Settings',
		'fields' => array(
			'customCSS' => array(
				'label' => 'Custom CSS',
				'tag' => 'textarea',
				'attr' => 'cols="20" rows="10"',
				'text' => 'You can enter custom style rules into this box if you\'d like. IE: <i>a{color: red !important;}</i><br />This is an advanced option! This is not recommended for users not fluent in CSS... but if you do know CSS, anything you add here will override the default styles'
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
