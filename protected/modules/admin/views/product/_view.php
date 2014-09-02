<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video')); ?>:</b>
	<?php echo CHtml::encode($data->video); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('download')); ?>:</b>
	<?php echo CHtml::encode($data->download); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating')); ?>:</b>
	<?php echo CHtml::encode($data->rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_count')); ?>:</b>
	<?php echo CHtml::encode($data->rate_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_source')); ?>:</b>
	<?php echo CHtml::encode($data->from_source); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bundle_id')); ?>:</b>
	<?php echo CHtml::encode($data->bundle_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_name')); ?>:</b>
	<?php echo CHtml::encode($data->package_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
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