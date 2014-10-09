<?php

// define core config
define('THEME', 'classic');
define('THEME_URL', '/themes/'.THEME.'/');
define('PLUGIN_URL', '/themes/plugins/');
define('IMAGE_URL', '/resource/');
define('BANNER_URL', '/resource/banner/');

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
$configures = array(
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
		'home' => array(
			'userClass'=>'User', //the name of your Userclass
			'config'=>array(
				'base_url' => 'http://'. $_SERVER['SERVER_NAME'] . '/hybridauth',
				"providers" => array(
					"Google" => array(
						"enabled" => true,
						"keys"    => array(
							"id"     => "224290354895-2e5l2t294tl352d48rgk7fcpn4o6a324.apps.googleusercontent.com",
							"secret" => "79EDOZGx4EP3IZBmo1doBUdk"
						),
						"scope"   => ""
					),

					"Facebook" => array(
						"enabled" => true,
						"keys"    => array(
							"id"     => "560122764114956",
							"secret" => "ffaa2dbb080cfc5122ab1d8495f2422e"
						),
						// A comma-separated list of permissions you want to request from the user. See the Facebook docs for a full list of available permissions: http://developers.facebook.com/docs/reference/api/permissions.
						"scope"   => "",
						// The display context to show the authentication page. Options are: page, popup, iframe, touch and wap. Read the Facebook docs for more details: http://developers.facebook.com/docs/reference/dialogs#display. Default: page
						"display" => "page"
					),

					"OpenID"     => array("enabled" => false),
					"Yahoo"      => array("enabled" => false),
					"AOL"        => array("enabled" => false),
					"Twitter"    => array("enabled" => false),
					"Live"       => array("enabled" => false),
					"MySpace"    => array("enabled" => false),
					"LinkedIn"   => array("enabled" => false),
					"Foursquare" => array("enabled" => false),
				)
			)
		),
		'admin',
	),

	// THEME
	'theme' => THEME,

	// APPLICATION COMPONENTS
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// ROUTE settings
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'' => 'home/home/index',
				'gii/<controller:\w+>/<action:\w+>/*' => 'gii/<controller>/<action>/*',
				'admin/<controller:\w+>/<id:\d+>' => 'admin/<controller>/view',
				'admin/<controller:\w+>/<action:\w+>/<id:\d+>' => 'admin/<controller>/<action>',
				'admin/<controller:\w+>/<action:\w+>' => 'admin/<controller>/<action>',
				'<controller:\w+>/<action:\w+>/*' => 'home/<controller>/<action>/*',
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
			'password'         => 'root',
			'charset'          => 'utf8',
			'enableProfiling' => true,
			'enableParamLogging' => true,
		),

		'cache'=>array(
			'class'=>'system.caching.CFileCache',
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

if ((ENVIRONMENT == 'development') && (file_exists(dirname(__FILE__).'/development.php'))) {
	require(dirname(__FILE__).'/development.php');
}

return $configures;