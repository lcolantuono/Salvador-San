<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compra-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'metodoPago'); ?>
		<?php echo $form->textArea($model,'metodoPago',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metodoPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidaItems'); ?>
		<?php echo $form->textField($model,'cantidaItems'); ?>
		<?php echo $form->error($model,'cantidaItems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'montoTotal'); ?>
		<?php echo $form->textField($model,'montoTotal'); ?>
		<?php echo $form->error($model,'montoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCompra'); ?>
		<?php echo $form->textField($model,'fechaCompra'); ?>
		<?php echo $form->error($model,'fechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'realizado'); ?>
		<?php echo $form->textField($model,'realizado'); ?>
		<?php echo $form->error($model,'realizado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->