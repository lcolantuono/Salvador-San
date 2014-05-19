<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idProductos=>array('view','id'=>$model->idProductos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'View Productos', 'url'=>array('view', 'id'=>$model->idProductos)),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Update Producto : <?php echo $model->idProductos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>