<?php
/* @var $this SliderController */
/* @var $data Slider */?>
<div id="slider-nivo" class="nivoSlider">
<?php 
foreach ($slider as $data){
	echo '<img src="'.Yii::app()->theme->baseUrl.'/img/slider/'.$data->nombreImagen.'" data-thumb="'.Yii::app()->theme->baseUrl.'/img/slider/'.$data->nombreImagen.'" alt="'.$data->nombreImagen.'" title="" />';
}

?>
</div> 	