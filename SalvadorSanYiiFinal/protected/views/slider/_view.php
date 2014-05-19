<?php
/* @var $this SliderController */
/* @var $data Slider */
?>

<div class="view">

	<br />
	<img src="<?php echo Yii::app()->theme->baseUrl.'/img/slider/'.($data->nombreImagen); ?>" width="500">		
	<b><a href="<?php echo yii::app()->createUrl('slider/delete&id='.$data->idImagen)?>" style="color:red">BORRAR</a></b>
	<br />


</div>