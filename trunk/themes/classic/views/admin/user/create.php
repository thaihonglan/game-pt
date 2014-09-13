<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
// 	array('label'=>'Add Product', 'url'=>'/admin/product/create'),
// 	array('label'=>'Manage Product', 'url'=>'/admin/product/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Screenshot', 'url'=>'/admin/screenshot/create'),
// 	array('label'=>'Manage Screenshot', 'url'=>'/admin/screenshot/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add SourceFile', 'url'=>'/admin/sourcefile/create'),
// 	array('label'=>'Manage SourceFile', 'url'=>'/admin/sourcefile/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Sticky', 'url'=>'/admin/sort/create'),
// 	array('label'=>'Manage Sticky', 'url'=>'/admin/sort/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Banner', 'url'=>'/admin/banner/create'),
// 	array('label'=>'Manage Banner', 'url'=>'/admin/banner/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>