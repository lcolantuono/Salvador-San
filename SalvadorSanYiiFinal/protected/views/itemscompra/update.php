<?php
/* @var $this ItemscompraController */
/* @var $model Itemscompra */

$this->breadcrumbs=array(
	'Itemscompras'=>array('index'),
	$model->idItemCompra=>array('view','id'=>$model->idItemCompra),
	'Update',
);

$this->menu=array(
	array('label'=>'List Itemscompra', 'url'=>array('index')),
	array('label'=>'Create Itemscompra', 'url'=>array('create')),
	array('label'=>'View Itemscompra', 'url'=>array('view', 'id'=>$model->idItemCompra)),
	array('label'=>'Manage Itemscompra', 'url'=>array('admin')),
);
?>

<h1>Update Itemscompra <?php echo $model->idItemCompra; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>