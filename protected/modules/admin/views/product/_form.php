<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_type_id'); ?>
		<?php echo $form->textField($model,'product_type_id'); ?>
		<?php echo $form->error($model,'product_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->textArea($model,'video',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download'); ?>
		<?php echo $form->textField($model,'download',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'download'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_count'); ?>
		<?php echo $form->textField($model,'rate_count',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rate_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_source'); ?>
		<?php echo $form->textField($model,'from_source',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'from_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bundle_id'); ?>
		<?php echo $form->textField($model,'bundle_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bundle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'package_name'); ?>
		<?php echo $form->textField($model,'package_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'package_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastup_date'); ?>
		<?php echo $form->textField($model,'lastup_date'); ?>
		<?php echo $form->error($model,'lastup_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disable'); ?>
		<?php echo $form->textField($model,'disable'); ?>
		<?php echo $form->error($model,'disable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->