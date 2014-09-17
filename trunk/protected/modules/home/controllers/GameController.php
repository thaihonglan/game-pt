<?php

class GameController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/home/main';

	public function actionDetail($pid)
	{
		$productDetail = Product::model()->findByPk($pid);

		$productResource = SourceFile::model()->findByPk($productDetail->source_file_id, array('order' => 'id DESC', 'limit' => 1));

		$productScreenshots = Screenshot::model()->findAllByAttributes(array('product_id' => $productDetail->id));

		$productTypes = ProductType::model()->findAll();
		
		$monthlyTopProducts = Product::model()->homeList()->hot()->findAll();
		
		$similar = Product::model()->homeList()->hot()->findAllByAttributes(array('product_type_id' => $productDetail->product_type_id));
		
		$this->render('detail', array(
			'productDetail' => $productDetail,
			'productResource' => $productResource,
			'productScreenshots' => $productScreenshots,
			'productTypes' => $productTypes,
			'similar' => $similar,
			'monthlyTopProducts' => $monthlyTopProducts,
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