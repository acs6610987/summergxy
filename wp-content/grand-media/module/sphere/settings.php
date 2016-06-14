<?php
$default_options = array(
	'maxwidth' => '0',
	'lockheight' => '1',
	'height' => '500',
	'maxheight' => '0',
    'view_mode' => 'sphere',
	'view_mode_text' => 'View Mode',
	'thumbBgColor' => '292929',
	'property0' => 'opaque',
	'property1' => '000000',
	'property3' => '8',
	'property4' => '0',
	'property5' => '292929',
	'property6' => 'ffffff',
	'property7' => '4a4a4a',
	'property8' => '292929',
	'property9' => '737373',
	'property10' => 'ffffff',
	'property11' => 'ffffff',
	'property15' => 'e8e8e8',
	'property16' => 'cfcfcf',
	'property17' => '1',
	'property18' => '-1000',
	'property19' => '4a4a4a',
	'property20' => '60',
	'imageBorderColor' => 'e8e8e8',
	'borderSize' => '5',
	'backButtonColorText' => 'ffffff',
	'backButtonColorBg' => '292929',
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
				'attr' => 'type="number" min="0"',
				'text' => 'Set the maximum height of the gallery. Leave 0 to disable max-height.'
			),
			'view_mode' => array(
				'label' => 'Display Mode',
				'tag' => 'select',
				'attr' => '',
				'text' => '',
				'choices' => array(
					array(
						'label' => 'Sphere',
						'value' => 'sphere'
					),
					array(
						'label' => 'Plane',
						'value' => 'plane'
					)
				)
			),
			'view_mode_text' => array(
				'label' => 'View Mode Text Title',
				'tag' => 'input',
				'attr' => 'type="text"',
				'text' => ''
			),
			'property18' => array(
				'label' => 'Camera Z-position',
				'tag' => 'input',
				'attr' => 'type="number" min="-2000" max="-500"',
				'text' => ''
			),
			'property3' => array(
				'label' => 'Slideshow Delay',
				'tag' => 'input',
				'attr' => 'type="number" min="1" max="60"',
				'text' => 'Set delay between slides in seconds'
			),
			'property4' => array(
				'label' => 'Thumbnails Hint',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Show image Title on mouseover'
			),
			'property19' => array(
				'label' => 'Hint Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property20' => array(
				'label' => 'Hint Background Alpha',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="100" step="5"',
				'text' => ''
			),
			'property17' => array(
				'label' => 'FullScreen Mode',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Show FullScreen Button.'
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
			'thumbBgColor' => array(
				'label' => 'Thumbnails Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Set gallery background color'
			),
			'property5' => array(
				'label' => 'Buttons Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color" ',
				'text' => ''
			),
			'property6' => array(
				'label' => 'Buttons Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property7' => array(
				'label' => 'Buttons Text Color on Mouseover',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property8' => array(
				'label' => 'Category Buttons Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color" ',
				'text' => ''
			),
			'property9' => array(
				'label' => 'Category Buttons Background Color on Mouseover',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property10' => array(
				'label' => 'Category Buttons Text Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property11' => array(
				'label' => 'Category Buttons Text Color on Mouseover',
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
				'label' => 'Image Description Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Color of text for image description.'
			),
			'imageBorderColor' => array(
				'label' => 'Images Border Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'borderSize' => array(
				'label' => 'Images Border Size',
				'tag' => 'input',
				'attr' => 'type="number" min="0" max="10" step="1"',
				'text' => ''
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
