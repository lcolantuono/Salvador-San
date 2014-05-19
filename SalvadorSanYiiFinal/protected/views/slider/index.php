<?php
/* @var $this SliderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sliders',
);

$this->menu=array(
	array('label'=>'Create Slider', 'url'=>array('create')),
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>

<h1>Sliders</h1>

<?php 
$this->widget('application.extensions.EAjaxUploadSlider.EAjaxUpload', array(
		'id' => 'fileUploader',
		'config' => array(
				'action' => Yii::app()->createUrl('slider/upload'),
				'allowedExtensions' => array("jpg","mp3","mp4"), //array("jpg","jpeg","gif","exe","mov" and etc...
				'sizeLimit' => 1 * 1024 * 1024 * 10, // maximum file size in bytes
				'minSizeLimit' => 1024, // minimum file size in bytes
				'onComplete' => "js:function(id, fileName, responseJSON){ $('#archivo').val(fileName); $('#botones').css('display','inline'); }",
					
		)
));?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
