<?php

class GameController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/home/main';

	public function actionList() {

		$criteria = new CDbCriteria;

		if (isset($_GET['tid']) && ((int) $_GET['tid'] != 0)) {
			$criteria->compare('product_type_id', $_GET['tid']);
		}

		$count = Product::model()->count($criteria);
		$pages = new CPagination($count);

		$pages->pageSize = 30;
		$pages->applyLimit($criteria);
		$models = Product::model()->findAll($criteria);

		$productList = Product::model()->findAll($criteria);

		$productTypes = ProductType::model()->findAll();

		$this->render('list', array(
			'productList' => $productList,
			'productTypes' => $productTypes,
			'pages' => $pages,
		));
	}

	public function actionDetail($pid)
	{
		$productDetail = Product::model()->findByPk($pid);

		$productResource = SourceFile::model()->findByPk($productDetail->source_file_id, array('order' => 'id DESC', 'limit' => 1));

		$productScreenshots = Screenshot::model()->findAllByAttributes(array('product_id' => $productDetail->id));

		$productTypes = ProductType::model()->findAll();

		$monthlyTopProducts = Product::model()->homeList()->hot()->findAll();

		$similar = Product::model()->homeList()->hot()->findAllByAttributes(array('product_type_id' => $productDetail->product_type_id));

		$comments = null;
		if ($this->authData != null) {
			$comments = Comment::model()->findAllByAttributes(array(
				'user_id' => $this->authData['userId'],
				'product_id' => $pid,
			));
		}

		$this->render('detail', array(
			'productDetail' => $productDetail,
			'productResource' => $productResource,
			'productScreenshots' => $productScreenshots,
			'productTypes' => $productTypes,
			'similar' => $similar,
			'monthlyTopProducts' => $monthlyTopProducts,
			'comments' => $comments,
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