<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'metodoPago'); ?>
		<?php echo $form->textArea($model,'metodoPago',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidaItems'); ?>
		<?php echo $form->textField($model,'cantidaItems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoTotal'); ?>
		<?php echo $form->textField($model,'montoTotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCompra'); ?>
		<?php echo $form->textField($model,'fechaCompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'realizado'); ?>
		<?php echo $form->textField($model,'realizado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->