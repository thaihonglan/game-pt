<?php
/* @var $this OsController */
/* @var $model Os */

$this->breadcrumbs=array(
	'Oses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Os', 'url'=>array('index')),
	array('label'=>'Create Os', 'url'=>array('create')),
	array('label'=>'Update Os', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Os', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Os', 'url'=>array('admin')),
);
?>

<h1>View Os #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'avatar',
		'disable',
	),
)); ?>
