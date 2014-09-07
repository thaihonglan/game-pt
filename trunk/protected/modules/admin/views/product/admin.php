<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<p>
Sử dụng các dấu so sánh (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) ở đầu giá trị tìm kiếm để khoanh vùng các giá trị cần tìm.<br />
VD: >20, >=21, <>22, ...
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'product_type_id',
		'avatar',
		'disable',
		'create_date',
		'lastup_date',
		'download',

		/*
		'description',
		'video',
		'author',
		'rating',
		'rate_count',
		'from_source',
		'bundle_id',
		'package_name',
		'tag',
		'create_date',
		'disable',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
