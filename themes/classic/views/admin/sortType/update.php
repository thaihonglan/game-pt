<?php
/* @var $this SortTypeController */
/* @var $model SortType */

$this->breadcrumbs=array(
	'Sort Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SortType', 'url'=>array('index')),
	array('label'=>'Create SortType', 'url'=>array('create')),
	array('label'=>'View SortType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SortType', 'url'=>array('admin')),
);
?>

<h1>Update SortType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>