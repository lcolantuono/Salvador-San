<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechayhora'); ?>
		<?php echo $form->textField($model,'fechayhora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marca_idMarca'); ?>
		<?php echo $form->textField($model,'marca_idMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_idCategoria'); ?>
		<?php echo $form->textField($model,'categoria_idCategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoBarra'); ?>
		<?php echo $form->textField($model,'codigoBarra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->