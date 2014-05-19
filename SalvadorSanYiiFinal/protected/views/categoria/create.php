<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Create Categoria',
);

$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<h1>Crear Categoria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>