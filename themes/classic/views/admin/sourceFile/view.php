<?php
/* @var $this SourceFileController */
/* @var $model SourceFile */

$this->breadcrumbs=array(
	'Source Files'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SourceFile', 'url'=>array('index')),
	array('label'=>'Create SourceFile', 'url'=>array('create')),
	array('label'=>'Update SourceFile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SourceFile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn muốn xoá thật à ?')),
	array('label'=>'Manage SourceFile', 'url'=>array('admin')),
);
?>

<h1>View SourceFile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'os_id',
		'version',
		'path',
		'data_folder',
		'data_path',
		'download',
		'from_source',
		'create_date',
		'lastup_date',
		'disable',
	),
)); ?>
