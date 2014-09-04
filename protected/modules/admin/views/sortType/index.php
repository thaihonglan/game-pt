<?php
/* @var $this SortTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sort Types',
);

$this->menu=array(
	array('label'=>'Create SortType', 'url'=>array('create')),
	array('label'=>'Manage SortType', 'url'=>array('admin')),
);
?>

<h1>Sort Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
