<?php

$configures = CMap::mergeArray(
	$configures,

	// development configures go here
	array(
		'components' => array(
			'log' => array(
				'routes' => array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					),
					array(
						'class'=>'CWebLogRoute',
					),
				),
			)
		),
	)
);
