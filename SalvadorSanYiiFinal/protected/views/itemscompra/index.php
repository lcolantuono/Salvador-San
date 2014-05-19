<?php
/* @var $this ItemscompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Itemscompras',
);

$this->menu=array(
	array('label'=>'Create Itemscompra', 'url'=>array('create')),
	array('label'=>'Manage Itemscompra', 'url'=>array('admin')),
);
?>

<h1>Itemscompras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider->search(),
	'itemView'=>'_view',
)); ?>
