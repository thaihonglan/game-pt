<?php

// define core config
define('THEME', 'classic');
define('THEME_URL', 'themes'.DS.THEME.DS);
define('PLUGIN_URL', 'themes'.DS.'plugins'.DS);

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Game Portal',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	// MODULE
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'home',
		'admin'
	),

	// THEME
// 	'theme' => THEME,

	// APPLICATION COMPONENTS
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// ROUTE settings
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// CLIENT SCRIPTS settings
// 		'clientScript' => array(
// 			'packages' => array(
// 				'jquery' => array(
// 					'baseUrl' => PLUGIN_URL,
// 					'js' => array('jquery-2.1.1.min.js'),
// 				),
// 				'jquery-ui' => array(
// 					'baseUrl' => PLUGIN_URL.'jquery-ui',
// 					'js' => array('js/jquery-ui-1.10.4.min.js'),
// 					'css' => array('css/ui-lightness/jquery-ui-1.10.4.css'),
// 				),
// 			),
// 		),

		// DATABASE settings
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

		// ERROR and LOG settings
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);