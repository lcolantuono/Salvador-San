<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $imagen Imagenes*/	
echo '<div class="vistaProducto">';
echo '<div class="divImagenes">';?>

<div style="margin-left:10px; margin-right:20px">
<?php
    Yii::app()->user->setState('salt', rand(10, 99));
?>

<span class='zoom' id='ex1' style="border-color:grey">
<?php 
$tieneImagen = false;
foreach ($model->imagenes as $imagen){
	$tieneImagen = true;
	echo "<img src='".Yii::app()->theme->baseUrl."/img/productos/".$imagen->imagen."' id='jack' width='225' height='auto'/>";
break;
}
?>
</span>
<?php 
if (!$tieneImagen){
	$idProd = $_GET['id'];
	echo "<img src='".Yii::app()->theme->baseUrl."/img/productos/noimage.jpg'>";
	
	if (!(Yii::app()->user->isGuest)){
	
	echo '<h3><b>Agregar imagen al Producto.</b></h3>';
	
	$this->widget('application.extensions.EAjaxUpload.EAjaxUpload', array(
		'id' => 'fileUploader',
		'config' => array(
				'action' => Yii::app()->createUrl('productos/upload&idProd='.$idProd),
				'allowedExtensions' => array("jpg","mp3","mp4"), //array("jpg","jpeg","gif","exe","mov" and etc...
				'sizeLimit' => 1 * 1024 * 1024 * 10, // maximum file size in bytes
				'minSizeLimit' => 1024, // minimum file size in bytes
				'onComplete' => "js:function(id, fileName, responseJSON){ $('#archivo').val(fileName); $('#botones').css('display','inline'); }",
		)
));}}
?>

</div>

</div><div class="divInformacion">
<?php
echo '<h2>'.$model->titulo.'</h2>';
if($model->marca_idMarca==1){
echo '<img src="'.Yii::app()->theme->baseUrl.'/img/salvadorsanProdu.png" width="240" ><br/>';
} else {
echo '<img src="'.Yii::app()->theme->baseUrl.'/img/mancharealProd.png" width="240"><br/>';
}
echo $model->descripcion.'<br/>';
echo '<div class="precioProd"> $'.$model->precio.'</div>';
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl("/carrito/agregarCarrito"),
	'method'=>'get',
)); ?>

<input type="hidden" name="idProducto" value="<?php echo $model->idProductos ?>">

<select name="cantidad">
<?php 
$i=1;
while($model->stock>=$i){
  echo '<option value="'.$i.'">'.$i.'</option>';
  $i=$i+1;
  }
  ?>
</select><br/>

<?php echo CHtml::ajaxSubmitButton('Agregar al carrito', 
	CHtml::normalizeUrl(array('carrito/agregarCarrito', 'render'=>true)), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
	array('update'=>'#req_res',
		  'type'=>'get')); ?>


<?php $this->endWidget(); ?>
</div>
<div style="float:left;clear:left; margin-top:30px">
<div style=" border-top:1px solid grey;border-left:1px solid grey;border-right:1px solid grey;width:190px;padding-left:10px;margin-bottom:-10px"><h3>Informaci&oacute;n de la marca</h3></div>
<div style=" border:1px solid grey;padding-left:10px;font-size:12px;padding:12px">
Las prendas Salvador San se distinguen por la excelente calidad en las telas elegidas,
 por la originalidad de sus dise&ntilde;os y por perseguir la tendencia de la moda actual haciendo
  un mix entre lo cl&aacute;sico y moderno. <br/>Por todo eso, son prendas que perduran en el guardarropa
   d&aacute;ndole un estilo propio, exclusivo y atemporal.En esta etapa, ya afianzados en el mercado 
   de La Plata, el objetivo es tener distribuidores en el interior del pa&iacute;s bajo la forma de 
   venta mayorista con locales exclusivos o multimarcas.<br/>
   Produce zapatos de mujer de todo tipo: sandalias, zapatillas, zapatos, combinando siempre
    distintos materiales, plataformas y colores. Siguiendo las &uacute;ltimas tendencias en el mundo
     de la moda, Anca & Co realiza calzado femenino de calidad, moderno, con opciones para todo
      tipo de mujer</div>
</div></div>
