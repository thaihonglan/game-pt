<?php
/* @var $this SourceFileController */
/* @var $data SourceFile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('os_id')); ?>:</b>
	<?php echo CHtml::encode($data->os_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('path')); ?>:</b>
	<?php echo CHtml::encode($data->path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_folder')); ?>:</b>
	<?php echo CHtml::encode($data->data_folder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_path')); ?>:</b>
	<?php echo CHtml::encode($data->data_path); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('download')); ?>:</b>
	<?php echo CHtml::encode($data->download); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_source')); ?>:</b>
	<?php echo CHtml::encode($data->from_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastup_date')); ?>:</b>
	<?php echo CHtml::encode($data->lastup_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disable')); ?>:</b>
	<?php echo CHtml::encode($data->disable); ?>
	<br />

	*/ ?>

</div>