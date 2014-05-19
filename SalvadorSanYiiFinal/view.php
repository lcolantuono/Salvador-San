<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $imagen Imagenes*/	
echo '<div class="vistaProducto">';
echo '<div class="divImagenes">';
?>

<?php
    Yii::app()->user->setState('salt', rand(10, 99));
?>

<span class='zoom' id='ex1'>
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




<?php 

echo '</div><div class="divInformacion">';
echo '<h2>'.$model->titulo.'</h2>';
echo '<img src="'.Yii::app()->theme->baseUrl.'/img/prueba.jpg"><br/>';
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


<?php /* echo CHtml::ajaxSubmitButton(
	'Agregar carrito (prueba ajax)',          // the link body (it will NOT be HTML-encoded.)
	array('carrito/listarCarritoAjax'), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
	array('update'=>'#req_res')
); */
?>
<?php echo CHtml::ajaxSubmitButton('Agregar al carrito', 
	CHtml::normalizeUrl(array('carrito/agregarCarrito', 'render'=>true)), // the URL for the AJAX request. If empty, it is assumed to be the current URL.
	array('update'=>'#req_res',
		  'type'=>'get')); ?>


<?php $this->endWidget(); ?>
<?php 
echo '</div></div>';
?>