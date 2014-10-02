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
// 		$ha = Yii::app()->getModule('hybridauth')->getHybridAuth();
// 		$google = $ha->getAdapter('google');
// 		print_r($google); exit;
		$hotProducts = Product::model()->homeDislay()->hot()->findAll();

		$recentlyProducts = Product::model()->homeDislay()->recently()->findAll();

		$recommendProducts = Product::model()->homeDislay()->recommend()->findAll();

		$monthlyTopProducts = Product::model()->homeList()->hot()->findAll(); // @todo change conditions

		$productTypes = ProductType::model()->findAll();

		$banners = Banner::model()->findAll();

		$hotProductsCate1 = Product::model()->homeDislay()->hot()->findAllByAttributes(array('product_type_id' => 2));

		$recentlyProductsCate1 = Product::model()->homeDislay()->recently()->findAllByAttributes(array('product_type_id' => 2));

		$recommendProductsCate1 = Product::model()->homeDislay()->recommend()->findAllByAttributes(array('product_type_id' => 2));

		$monthlyTopProductsCate1 = Product::model()->homeList()->hot()->findAllByAttributes(array('product_type_id' => 2));

		$hotProductsCate2 = Product::model()->homeDislay()->hot()->findAllByAttributes(array('product_type_id' => 7));

		$recentlyProductsCate2 = Product::model()->homeDislay()->recently()->findAllByAttributes(array('product_type_id' => 7));

		$recommendProductsCate2 = Product::model()->homeDislay()->recommend()->findAllByAttributes(array('product_type_id' => 7));

		$monthlyTopProductsCate2 = Product::model()->homeList()->hot()->findAllByAttributes(array('product_type_id' => 7));

		$this->render('index', array(
			'hotProducts' => $hotProducts,
			'recentlyProducts' => $recentlyProducts,
			'recommendProducts' => $recommendProducts,
			'monthlyTopProducts' => $monthlyTopProducts,
			'productTypes' => $productTypes,
			'banners' => $banners,
			'hotProductsCate1' => $hotProductsCate1,
			'recentlyProductsCate1' => $recentlyProductsCate1,
			'recommendProductsCate1' => $recommendProductsCate1,
			'monthlyTopProductsCate1' => $monthlyTopProductsCate1,
			'hotProductsCate2' => $hotProductsCate2,
			'recentlyProductsCate2' => $recentlyProductsCate2,
			'recommendProductsCate2' => $recommendProductsCate2,
			'monthlyTopProductsCate2' => $monthlyTopProductsCate2,
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