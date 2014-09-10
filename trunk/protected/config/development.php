<?php

$configures = CMap::mergeArray(
	$configures,

	// development configures go here
	array(
		'components' => array(
			'db' => array(
				'class'            => 'CDbConnection',
				'connectionString' => 'mysql:host=127.0.0.1;dbname=gamept',
				'emulatePrepare'   => true,
				'username'         => 'root',
				'password'         => '',
				'charset'          => 'utf8',
				'enableProfiling' => true,
				'enableParamLogging' => true,
			),
		),
	)
);
