<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Clave'); ?>
		<?php echo $form->passwordField($model,'Clave',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->HiddenField($model,'idRol', array('value'=>'2')); ?>
		<?php echo $form->error($model,'idRol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NombreApellido'); ?>
		<?php echo $form->textField($model,'NombreApellido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NombreApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrarse' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->