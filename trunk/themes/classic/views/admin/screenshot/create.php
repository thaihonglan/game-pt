<?php
/* @var $this ScreenshotController */
/* @var $model Screenshot */

$this->breadcrumbs=array(
	'Screenshots'=>array('index'),
	'Create',
);

$this->menu=array(
// 	array('label'=>'Add Product', 'url'=>'/admin/product/create'),
// 	array('label'=>'Manage Product', 'url'=>'/admin/product/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'List Screenshot', 'url'=>array('index')),
	array('label'=>'Manage Screenshot', 'url'=>array('admin')),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Source File', 'url'=>'/admin/sourcefile/create'),
// 	array('label'=>'Manage Source File', 'url'=>'/admin/sourcefile/admin'),
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

<h1>Create Screenshot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>