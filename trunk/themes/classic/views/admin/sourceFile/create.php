<?php
/* @var $this SourceFileController */
/* @var $model SourceFile */

$this->breadcrumbs=array(
	'Source Files'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SourceFile', 'url'=>array('index')),
	array('label'=>'Manage SourceFile', 'url'=>array('admin')),
);
?>

<h1>Create SourceFile</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>