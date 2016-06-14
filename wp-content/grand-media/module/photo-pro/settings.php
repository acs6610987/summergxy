<?php
$default_options = array(
	'maxwidth' => '0',
	'lockheight' => '1',
	'height' => '500',
	'maxheight' => '0',
  'property0' => 'opaque',
	'property1' => '272727',
	'slideshow' => '0',
	'property2' => '10',
	'thumbWidth' => '50',
	'thumbHeight' => '50',
	'property7' => '717171',
	'property8' => '7485c2',
	'property15' => '7485c2',
	'property16' => 'e0e0e0',
	'buttonsBgColor' => '000000',
	'linkColor' => 'ffffff',
	'titleFontSize' => '12',
	'descriptionFontSize' => '12',
	'backButtonColorBg' => '000000',
	'backButtonColorText' => 'ffffff',
	'hitCounter' => '1',
	'categoryFontSize' => '11',
	'thumbnailsText' => 'THUMBNAILS',
	'slideshowText' => 'SLIDESHOW',
	'fullscreenText' => 'FULLSCREEN',
	'thumbBarBgColor' => '000000',
	'thumbBarBgAlpha' => '70',
	'zoom' => 'FILL',
	'openMenuAlways' => '0',
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
			'slideshow' => array(
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
			'hitCounter' => array(
				'label' => 'Views Counter Switch',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Enable / Disable'
			),
			'zoom' => array(
				'label' => 'Image Zoom',
				'tag' => 'select',
				'attr' => '',
				'text' => '',
				'choices' => array(
					array(
						'label' => 'FILL',
						'value' => 'FILL'
					),
					array(
						'label' => 'FIT',
						'value' => 'FIT'
					)
				)
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
			'buttonsBgColor' => array(
				'label' => 'Buttons BG Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property7' => array(
				'label' => 'Buttons Icon Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property8' => array(
				'label' => 'Buttons Icon Color on Mouseover',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color" ',
				'text' => ''
			),
			'openMenuAlways' => array(
				'label' => 'Always show Categories Menu',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => ''
			),
			'categoryFontSize' => array(
				'label' => 'Categories Menu Text Font Size',
				'tag' => 'input',
				'attr' => 'type="number" min="8" max="24"',
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
			'thumbBarBgColor' => array(
				'label' => 'Thumbnails Bar BG Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'thumbBarBgAlpha' => array(
				'label' => 'Thumbnails Bar BG Alpha',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="100" step="5"',
				'text' => ''
			),
			'thumbWidth' => array(
				'label' => 'Thumbnail Width',
				'tag' => 'input',
				'attr' => 'type="number" min="30" max="300"',
				'text' => ''
			),
			'thumbHeight' => array(
				'label' => 'Thumbnail Height',
				'tag' => 'input',
				'attr' => 'type="number" min="30" max="300"',
				'text' => ''
			),
			'property15' => array(
				'label' => 'Image Title Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Color of text for image title in the description.'
			),
			'titleFontSize' => array(
				'label' => 'Title Text Font Size',
				'tag' => 'input',
				'attr' => 'type="number" min="8" max="24"',
				'text' => ''
			),
			'property16' => array(
				'label' => 'Image Description Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Color of text for image description.'
			),
			'descriptionFontSize' => array(
				'label' => 'Description Text Font Size',
				'tag' => 'input',
				'attr' => 'type="number" min="8" max="24"',
				'text' => ''
			),
			'linkColor' => array(
				'label' => 'Image Description Link Color',
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
