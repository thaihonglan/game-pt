<?php
/* @var $this SourceFileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Source Files',
);

$this->menu=array(
// 	array('label'=>'Add Product', 'url'=>'/admin/product/create'),
// 	array('label'=>'Manage Product', 'url'=>'/admin/product/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Screenshot', 'url'=>'/admin/screenshot/create'),
// 	array('label'=>'Manage Screenshot', 'url'=>'/admin/screenshot/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'Add SourceFile', 'url'=>array('create')),
	array('label'=>'Manage SourceFile', 'url'=>array('admin')),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Sticky', 'url'=>'/admin/sort/create'),
// 	array('label'=>'Manage Sticky', 'url'=>'/admin/sort/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Banner', 'url'=>'/admin/banner/create'),
// 	array('label'=>'Manage Banner', 'url'=>'/admin/banner/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add User', 'url'=>'/admin/user/create'),
// 	array('label'=>'Manage User', 'url'=>'/admin/user/admin'),
);
?>

<h1>Source Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
