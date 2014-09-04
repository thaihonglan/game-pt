<?php
/* @var $this SourceFileController */
/* @var $model SourceFile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'source-file-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'os_id'); ?>
		<?php echo $form->textField($model,'os_id'); ?>
		<?php echo $form->error($model,'os_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_folder'); ?>
		<?php echo $form->textField($model,'data_folder',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'data_folder'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_path'); ?>
		<?php echo $form->textField($model,'data_path',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'data_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download'); ?>
		<?php echo $form->textField($model,'download',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'download'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'from_source'); ?>
		<?php echo $form->textField($model,'from_source',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'from_source'); ?>
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