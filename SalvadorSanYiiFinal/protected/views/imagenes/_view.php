<?php
/* @var $this ImagenesController */
/* @var $data Imagenes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idImagenes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idImagenes), array('view', 'id'=>$data->idImagenes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productos_idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->productos_idProductos); ?>
	<br />


</div>