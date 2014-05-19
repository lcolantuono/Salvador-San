<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */
//exit('aca');
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'/categoria/_view',
)); ?>
