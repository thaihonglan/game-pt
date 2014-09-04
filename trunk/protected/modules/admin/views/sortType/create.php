<?php
/* @var $this SortTypeController */
/* @var $model SortType */

$this->breadcrumbs=array(
	'Sort Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SortType', 'url'=>array('index')),
	array('label'=>'Manage SortType', 'url'=>array('admin')),
);
?>

<h1>Create SortType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>