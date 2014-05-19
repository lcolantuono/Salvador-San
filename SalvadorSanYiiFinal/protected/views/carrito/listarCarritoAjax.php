<?php
/* @var $this CarritoController */
/* @var $producto Productos */
?>
<div style="overflow: scroll; height: 300px;">


<table>
<tr><td colspan="3"><h3><b>Carrito de Compras</b><span></span></h3></td>

<?php 
$precioTotalProducto = 0;
$precioTotal = 0;
$i = 1;

/* if ($i==1){
	echo '</tr><tr><td><span>El carrito se encuentra vac&iacute;o.</span></td></tr>';
} */


foreach($listaProductos as $producto){
	echo '<tr>';
	foreach ($producto->imagenes as $imagen) {
		echo '<td><img src="'.Yii::app()->theme->baseUrl.'/img/productos/'.$imagen->imagen.'" width="80px" /></td>';
		break;
	}
	
	$precioTotalProducto = $producto->cantidad * $producto->precio;
	$precioTotal = $precioTotal + $precioTotalProducto;
	echo '<td class="textoCarrito"><a  href="'.Yii::app()->homeUrl.'?r=productos/view&id='.$producto->idProductos.'"<p style="font-size: x-large; text-align: left;">'.$producto->titulo.'</p></a>
	<p style="text-align: left;">Cantidad: '.$producto->cantidad.'</br>
	Precio individual: $'.$producto->precio.'</br></p>';
	//$'.$precioTotalProducto.'</br>
	echo '<td class="textoCarrito"><a href="'.Yii::app()->homeUrl.'?r=carrito/borrarProducto&idProducto='.$producto->idProductos.'">X</a></td></tr>';
	$precioTotalProducto = 0;
	$i = $i + 1;
	echo '<tr><td><span class="header-line"></span></td></tr>';
}


?>
<!-- Boton -->
<?php $items=$i-1;?>
<tr><td><?php echo $items.' items';?></td><td colspan="2" class="textoCarrito"><h3 style="text-align:right;"><b>Total: </b>$<?php echo $precioTotal?></h3></td></tr>
<tr>
<td><?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=>'link',
	'url'=>''.Yii::app()->createUrl("/carrito/listarCarrito").'',
    'type'=>'primary',
    'label'=>'Ir al Carrito',
    'loadingText'=>'aguarde...',
    'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>

<!--  <a href="<?php echo Yii::app()->createUrl('/carrito/listarCarrito');?>">IR AL CARRITO</a> -->
</td>

<td class="textoCarrito"><?php $this->widget('bootstrap.widgets.TbButton', array(
    
	'buttonType'=>'link',
	'type'=>'success',
	//'name'=>'submit',
	'url'=>''.Yii::app()->createUrl("/carrito/comprar").'',
    //'type'=>'primary',
    'label'=>'Comprar',
    'loadingText'=>'aguarde...',
    'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>

<!--  <a href="<?php echo Yii::app()->createUrl('/carrito/comprar');?>"><input type="image" src="https://argentina.dineromail.com/imagenes/botones/pagar-medios_c.gif" border="0" name="submit" alt="Pagar con DineroMail" width="100"></a> -->

</td>
</tr>

</table>


</div>

<script type="text/javascript">
	$('#buttonStateful').click(function() {
	    var btn = $(this);
	    btn.button('loading'); // call the loading function
	    setTimeout(function() {
	        btn.button('reset'); // call the reset function
	    }, 3000);
	});
</script>