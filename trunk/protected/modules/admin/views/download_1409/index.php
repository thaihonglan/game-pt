<?php
/* @var $this Download_1409Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Download 1409s',
);

$this->menu=array(
	array('label'=>'Create Download_1409', 'url'=>array('create')),
	array('label'=>'Manage Download_1409', 'url'=>array('admin')),
);
?>

<h1>Download 1409s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
