<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Add Product', 'url'=>'/admin/product/create'),
	array('label'=>'Manage Product', 'url'=>'/admin/product/admin'),
	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'Add Screenshot', 'url'=>'/admin/screenshot/create'),
	array('label'=>'Manage Screenshot', 'url'=>'/admin/screenshot/admin'),
	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'Add SourceFile', 'url'=>'/admin/sourcefile/create'),
	array('label'=>'Manage SourceFile', 'url'=>'/admin/sourcefile/admin'),
	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'Add Sticky', 'url'=>'/admin/sort/create'),
	array('label'=>'Manage Sticky', 'url'=>'/admin/sort/admin'),
	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Manage Banner', 'url'=>array('admin')),
	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'Add User', 'url'=>'/admin/user/create'),
	array('label'=>'Manage User', 'url'=>'/admin/user/admin'),
);
?>

<h1>Create Banner</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>