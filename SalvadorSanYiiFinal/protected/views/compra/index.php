<?php
/* @var $this CompraController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Mis Compras</h1>

<ul>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider->search(),
	'itemView'=>'_view',
)); ?>
</ul>