<?php
/* @var $this MarcaController */
/* @var $data Marca */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMarca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idMarca), array('view', 'id'=>$data->idMarca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />


</div>