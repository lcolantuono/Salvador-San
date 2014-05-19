<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	$model->idImagenes=>array('view','id'=>$model->idImagenes),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagenes', 'url'=>array('index')),
	array('label'=>'Create Imagenes', 'url'=>array('create')),
	array('label'=>'View Imagenes', 'url'=>array('view', 'id'=>$model->idImagenes)),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>Update Imagenes <?php echo $model->idImagenes; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>