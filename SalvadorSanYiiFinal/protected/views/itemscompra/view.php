<?php
/* @var $this ItemscompraController */
/* @var $model Itemscompra */

$this->breadcrumbs=array(
	'Itemscompras'=>array('index'),
	$model->idItemCompra,
);

$this->menu=array(
	array('label'=>'List Itemscompra', 'url'=>array('index')),
	array('label'=>'Create Itemscompra', 'url'=>array('create')),
	array('label'=>'Update Itemscompra', 'url'=>array('update', 'id'=>$model->idItemCompra)),
	array('label'=>'Delete Itemscompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idItemCompra),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Itemscompra', 'url'=>array('admin')),
);
?>

<h1>View Itemscompra #<?php echo $model->idItemCompra; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idItemCompra',
		'idCompra',
		'idProducto',
		'cantidad',
		'precioTotal',
	),
)); ?>
