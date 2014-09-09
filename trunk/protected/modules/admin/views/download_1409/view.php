<?php
/* @var $this Download_1409Controller */
/* @var $model Download_1409 */

$this->breadcrumbs=array(
	'Download 1409s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Download_1409', 'url'=>array('index')),
	array('label'=>'Create Download_1409', 'url'=>array('create')),
	array('label'=>'Update Download_1409', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Download_1409', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Bạn muốn xoá thật à ?')),
	array('label'=>'Manage Download_1409', 'url'=>array('admin')),
);
?>

<h1>View Download_1409 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'source_file_id',
		'download',
		'create_date',
	),
)); ?>
