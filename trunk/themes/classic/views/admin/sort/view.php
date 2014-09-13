<?php
/* @var $this SortController */
/* @var $model Sort */

$this->breadcrumbs=array(
	'Sorts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sort', 'url'=>array('index')),
	array('label'=>'Create Sort', 'url'=>array('create')),
	array('label'=>'Update Sort', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sort', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn muốn xoá thật à ?')),
	array('label'=>'Manage Sort', 'url'=>array('admin')),
);
?>

<h1>View Sort #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'list_type_id',
		'sequence',
	),
)); ?>