<?php
/* @var $this SourceFileController */
/* @var $model SourceFile */

$this->breadcrumbs=array(
	'Source Files'=>array('index'),
	'Manage',
);

$this->menu=array(
// 	array('label'=>'Add Product', 'url'=>'/admin/product/create'),
// 	array('label'=>'Manage Product', 'url'=>'/admin/product/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
// 	array('label'=>'Add Screenshot', 'url'=>'/admin/screenshot/create'),
// 	array('label'=>'Manage Screenshot', 'url'=>'/admin/screenshot/admin'),
// 	array('label'=>'- - - - - - - - - - - - - - - - - - - - - -'),
	array('label'=>'List SourceFile', 'url'=>array('index')),
	array('label'=>'Add SourceFile', 'url'=>array('create')),
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

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#source-file-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Source Files</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'source-file-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'product_id',
		'os_id',
		'version',
		'path',
		'data_folder',
		/*
		'data_path',
		'download',
		'from_source',
		'create_date',
		'lastup_date',
		'disable',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
