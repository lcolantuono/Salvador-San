<?php
/* @var $this ProductosController */
/* @var $data Productos */
/* @var $imagen Imagenes*/?>
<div class="contProdWidget">
<?php 
foreach ($productos as $data):
	echo '<div class="contInd">';
	 foreach ($data->imagenes as $imagen) {
	echo '<a href="/SalvadorSanYii/themes/hebo/img/productos/'.$imagen->imagen.'" rel="lightbox" class="thumbnail">';
	echo '<img src="/SalvadorSanYii/themes/hebo/img/productos/'.$imagen->imagen.'" class="img-polaroid" width="180"></a>';
	break;
	
} echo '<br/>';
if($data->marca_idMarca==1){
	echo '<img src="'.yii::app()->theme->baseUrl.'/img/salvadorsanProdu.png">';
	} else {
		echo '<img src="'.yii::app()->theme->baseUrl.'/img/mancharealProd.png">';
	}  
 echo '<div class="tituloProducto"><h3>'.CHtml::encode($data->titulo).'</h3>';
	
	echo '<p>'.CHtml::encode($data->descripcion).'</p>'; 
	echo '<div class="precio"> $'.CHtml::encode($data->precio).'</div>';
	echo '<div class="vinculoProducto">'.CHtml::link(CHtml::encode('DETALLES').'</div>', array('productos/view', 'id'=>$data->idProductos)); 
	echo '</div></div>'?>
		
<?php endforeach;?>
</div>