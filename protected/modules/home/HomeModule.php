<?php

class HomeModule extends CWebModule
{
	private $_assetsUrl;
	public $userClass;
	public $config;

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'home.models.*',
			'home.components.*',
		));
	}

	/**
	 * @return string the base URL that contains all published asset files of this module.
	 */
	public function getAssetsUrl()
	{
		if($this->_assetsUrl===null)
			$this->_assetsUrl=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('admin.assets'));
		return $this->_assetsUrl;
	}

	/**
	 * @param string the base URL that contains all published asset files of this module.
	 */
	public function setAssetsUrl($value)
	{
		$this->_assetsUrl=$value;
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			if (isset(Yii::app()->session['webAuth'])) {
				$controller->authData = Yii::app()->session['webAuth'];
			}

			if (Yii::app()->getController()->id != 'auth') {
				Yii::app()->session['curUrl'] = Yii::app()->request->requestUri;
			}

			return true;
		}
		else
			return false;
	}
}
