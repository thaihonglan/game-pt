<?php
/* @var $this Download_1409Controller */
/* @var $model Download_1409 */

$this->breadcrumbs=array(
	'Download 1409s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Download_1409', 'url'=>array('index')),
	array('label'=>'Create Download_1409', 'url'=>array('create')),
	array('label'=>'View Download_1409', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Download_1409', 'url'=>array('admin')),
);
?>

<h1>Update Download_1409 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>