<?php
/* @var $this SourceFileController */
/* @var $model SourceFile */

$this->breadcrumbs=array(
	'Source Files'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SourceFile', 'url'=>array('index')),
	array('label'=>'Create SourceFile', 'url'=>array('create')),
	array('label'=>'View SourceFile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SourceFile', 'url'=>array('admin')),
);
?>

<h1>Update SourceFile <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>