<?php
/* @var $this ItemscompraController */
/* @var $model Itemscompra */

$this->breadcrumbs=array(
	'Itemscompras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Itemscompra', 'url'=>array('index')),
	array('label'=>'Manage Itemscompra', 'url'=>array('admin')),
);
?>

<h1>Create Itemscompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>