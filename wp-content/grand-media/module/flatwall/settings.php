<?php
$default_options = array(
	'maxwidth' => '0',
	'lockheight' => '1',
	'height' => '500',
	'maxheight' => '0',
 	'thumbSize' => '76',
	'thumbBgColor' => '292929',
	'property0' => 'opaque',
	'property1' => '000000',
	'property2' => '5',
	'property3' => '8',
	'property4' => '0',
	'swfmousewheel' => '1',
	'property5' => '292929',
	'property6' => 'ffffff',
	'property7' => '4a4a4a',
	'property8' => '292929',
	'property9' => '737373',
	'property10' => 'ffffff',
	'property11' => 'ffffff',
	'property12' => '4a4a4a',
	'property13' => 'ffffff',
	'property14' => 'ffffff',
	'property15' => 'e8e8e8',
	'property16' => 'cfcfcf',
	'property17' => '1',
	'property18' => '-500',
	'property19' => '4a4a4a',
	'property20' => '60',
	'backButtonColorText' => 'ffffff',
	'backButtonColorBg' => '292929',
	'imageBorderColor' => 'e8e8e8',
	'borderSize' => '5',
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
			'property2' => array(
				'label' => 'Thumbnail Rows',
				'tag' => 'input',
				'attr' => 'type="number" min="1" max="7"',
				'text' => ''
			),
			'thumbSize' => array(
				'label' => 'Thumbnails Size',
				'tag' => 'input',
				'attr' => 'type="number" min="20" max="150"',
				'text' => ''
			),
			'thumbBgColor' => array(
				'label' => 'Thumbnails Background Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property18' => array(
				'label' => 'Camera Z-position',
				'tag' => 'input',
				'attr' => 'type="number" min="-1500" max="-500"',
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
			'swfmousewheel' => array(
				'label' => 'SWF Mouse Wheel',
				'tag' => 'checkbox',
				'attr' => '',
				'text' => 'Turn On/Off mouse wheel detection over Gallery.'
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
			'property12' => array(
				'label' => 'Scroll Bar Track Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property13' => array(
				'label' => 'Scroll Bar Button Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => ''
			),
			'property14' => array(
				'label' => 'Thumbnail BG Color',
				'tag' => 'input',
				'attr' => 'type="text" data-type="color"',
				'text' => 'Background of the thumbnail placeholder while thumbnail is loading.'
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
