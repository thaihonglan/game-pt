<?php

class HomeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/home/main';

	/**
	 * @var string the name of the default action. Defaults to 'index'.
	 */
	public $defaultAction='index';

	public function actionIndex()
	{
		$hotProducts = Product::model()->homeDislay()->hot()->findAll();

		$recentlyProducts = Product::model()->homeDislay()->recently()->findAll();

		$recommendProducts = Product::model()->homeDislay()->recommend()->findAll();

		$monthlyTopProducts = Product::model()->homeList()->hot()->findAll(); // @todo change conditions

		$productTypes = ProductType::model()->findAll();

		$this->render('index', array(
			'hotProducts' => $hotProducts,
			'recentlyProducts' => $recentlyProducts,
			'recommendProducts' => $recommendProducts,
			'monthlyTopProducts' => $monthlyTopProducts,
			'productTypes' => $productTypes,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}