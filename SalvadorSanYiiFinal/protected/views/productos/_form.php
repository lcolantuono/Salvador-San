<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	'enableAjaxValidation'=>false,
	//'action'=>'index.php?r=imagenes/create',
)); ?>

	<p class="note">Los campos <span class="required" style="color:red">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock'); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<?php $fecha = date('Y-m-d H:m:s'); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'fechayhora'); ?>
		<?php echo $form->textField($model, 'fechayhora', array('value'=>$fecha, 'readonly'=>'true')); ?>
		<?php echo $form->error($model,'fechayhora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca_idMarca'); ?>
		<?php echo $form->dropDownList($model,'marca_idMarca',CHtml::listData(Marca::model()->findAll(),'idMarca','marca'), array('empty'=>'Seleccionar..'));?>		
		<?php echo $form->error($model,'marca_idMarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_idCategoria'); ?>
		<?php echo $form->dropDownList($model,'categoria_idCategoria',CHtml::listData(Categoria::model()->findAll(),'idCategoria','categoria'), array('empty'=>'Seleccionar..'));?>
		<?php echo $form->error($model,'categoria_idCategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoBarra'); ?>
		<?php echo $form->textField($model,'codigoBarra'); ?>
		<?php echo $form->error($model,'codigoBarra'); ?>
	</div>
	

<div id="description_id">
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->