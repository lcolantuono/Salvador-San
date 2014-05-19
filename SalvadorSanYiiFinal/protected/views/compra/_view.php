<?php
/* @var $this CompraController */
/* @var $data Compra */
?>
<li>

  Compra realizada el d&iacute;a <?php echo CHtml::encode($data->fechaCompra) ?> <a href="<?php echo Yii::app()->createUrl('/compra/view&id='.$data->id_compra)?>">Ver detalle</a><br/>


</li>