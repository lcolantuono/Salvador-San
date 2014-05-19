<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->breadcrumbs=array(
	'Sliders'=>array('index'),
	$model->idImagen,
);

$this->menu=array(
	array('label'=>'List Slider', 'url'=>array('index')),
	array('label'=>'Create Slider', 'url'=>array('create')),
	array('label'=>'Update Slider', 'url'=>array('update', 'id'=>$model->idImagen)),
	array('label'=>'Delete Slider', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idImagen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>

<h1>View Slider #<?php echo $model->idImagen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idImagen',
		'nombreImagen',
	),
)); ?>
