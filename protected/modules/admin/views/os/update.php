<?php
/* @var $this OsController */
/* @var $model Os */

$this->breadcrumbs=array(
	'Oses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Os', 'url'=>array('index')),
	array('label'=>'Create Os', 'url'=>array('create')),
	array('label'=>'View Os', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Os', 'url'=>array('admin')),
);
?>

<h1>Update Os <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>