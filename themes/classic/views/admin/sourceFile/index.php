<?php
/* @var $this SourceFileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Source Files',
);

$this->menu=array(
	array('label'=>'Create SourceFile', 'url'=>array('create')),
	array('label'=>'Manage SourceFile', 'url'=>array('admin')),
);
?>

<h1>Source Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
