<?php
/* @var $this CompraController */
/* @var $model Compra */
/* @var $data Itemscompra*/

?>
<a href="<?php echo Yii::app()->createUrl('/compra/index&idUsuario='.$model->idUsuario)?>">Volver atras</a>
<h1>Detalle de compra</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'metodoPago',
		'cantidaItems',
		'montoTotal',
		'id_compra',
		'idUsuario',
		'fechaCompra',
		'realizado',
	),
)); 


?>
