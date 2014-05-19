<?php
/* @var $this ItemscompraController */
/* @var $data Itemscompra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idItemCompra')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idItemCompra), array('view', 'id'=>$data->idItemCompra)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCompra')); ?>:</b>
	<?php echo CHtml::encode($data->idCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::encode($data->idProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioTotal')); ?>:</b>
	<?php echo CHtml::encode($data->precioTotal); ?>
	<br />


</div>