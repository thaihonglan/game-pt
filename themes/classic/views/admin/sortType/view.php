<?php
/* @var $this SortTypeController */
/* @var $model SortType */

$this->breadcrumbs=array(
	'Sort Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SortType', 'url'=>array('index')),
	array('label'=>'Create SortType', 'url'=>array('create')),
	array('label'=>'Update SortType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SortType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn muốn xoá thật à ?')),
	array('label'=>'Manage SortType', 'url'=>array('admin')),
);
?>

<h1>View SortType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'key',
		'disable',
	),
)); ?>
