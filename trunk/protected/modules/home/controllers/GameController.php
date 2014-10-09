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

	public function actionDetail($pid) {

		$productDetail = Product::model()->findByPk($pid);

		$productResource = SourceFile::model()->findByPk($productDetail->source_file_id, array('order' => 'id DESC', 'limit' => 1));

		$productScreenshots = Screenshot::model()->findAllByAttributes(array('product_id' => $productDetail->id));

		$productTypes = ProductType::model()->findAll();

		$monthlyTopProducts = Product::model()->homeList()->hot()->findAll();

		$similar = Product::model()->homeList()->hot()->findAllByAttributes(array('product_type_id' => $productDetail->product_type_id));

		$comments = null;
		if ($this->authData != null) {
			$comments = Comment::model()->detailList()->with('user')->findAllByAttributes(array(
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

	public function actionAjaxVote($pid, $t) {

		if (!YII_DEBUG && !Yii::app()->request->isAjaxRequest) {
			throw new CHttpException('403', 'Forbidden access.');
		}

		if (($pid == '') || ($t == '') || (!in_array($t, array('like', 'dislike')))) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		if (!$product = Product::model()->findByPk($pid)) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		if (!$product->$t()) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		echo json_encode(array('status' => 200));
		Yii::app()->end();
	}

	public function actionAjaxComment() {

		if (!YII_DEBUG && !Yii::app()->request->isAjaxRequest) {
			throw new CHttpException('403', 'Forbidden access.');
		}

		if (!isset($this->authData['userId'])) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		if (!isset($_POST['rate']) || !isset($_POST['content']) || !isset($_POST['product_id'])) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		$newComment = new Comment;
		$newComment->content = $_POST['content'];
		$newComment->rating = $_POST['rate'];
		$newComment->user_id = $this->authData['userId'];
		$newComment->product_id = $_POST['product_id'];
		$newComment->create_date = date('Y-m-d h:i:s');

		$newComment->save();

		$product = Product::model()->findByPk($_POST['product_id']);
		$product->rating = (($product->rating * $product->rate_count) + $_POST['rate']) / ($product->rate_count + 1);
		$product->rate_count++;

		$product->save();

		echo json_encode(array(
			'status' => 200,
			'data' => array(
				'name' => $this->authData['displayName'],
				'rating' => $newComment->rating,
				'date' => $newComment->create_date,
				'content' => $newComment->content
			)
		));
		Yii::app()->end();
	}

	public function actionAjaxExpandComment() {

		if (!YII_DEBUG && !Yii::app()->request->isAjaxRequest) {
			throw new CHttpException('403', 'Forbidden access.');
		}

		if (!isset($_POST['product_id'])) {
			echo json_encode(array('status' => 400));
			Yii::app()->end();
		}

		$comments = Comment::model()->detailList()->with('user')->findAll('t.product_id = :product_id AND t.create_date < :create_date', array(
			':product_id' => $_POST['product_id'],
			':create_date' => $_POST['date']
		));

		$data = array();
		foreach ($comments as $comment) {
			$data[] = array(
				'name' => $comment->user->display_name,
				'rating' => $comment->rating,
				'date' => $comment->create_date,
				'content' => $comment->content,
			);
		}

		echo json_encode(array(
			'status' => 200,
			'data' => $data,
		));
		Yii::app()->end();
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