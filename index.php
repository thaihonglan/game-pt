<?php

/*
 *---------------------------------------------------------------
* APPLICATION ENVIRONMENT
*---------------------------------------------------------------
* You can load different configurations depending on your
* current environment. Setting the environment also influences
* things like logging and error reporting.
*
* This can be set to anything, but default usage is:
*
*     development
*     testing
*     production
*/
define('ENVIRONMENT', 'development');

switch (ENVIRONMENT) {
	case 'development':
		defined('YII_DEBUG') or define('YII_DEBUG',true);
		// specify how many levels of call stack should be shown in each log message
		defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
		break;

	case 'testing':
	case 'production':
		break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

define('DS', DIRECTORY_SEPARATOR);
define('YII_VERSION', '1.1.15');

// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/vendor/yii-'.YII_VERSION.'/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();
