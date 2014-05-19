<?php
/* @var $this CarritoController */
/* @var $producto Productos */
?>
<div>
<h1>Carrito de Compras</h1>

<table style="width:100%">

<tr style="background-color: gray; color: white;"><td colspan="2">Producto</td><td class="textoCarrito">Cantidad</td><td class="textoCarrito">Precio Unitario</td><td class="textoCarrito">Precio total</td></tr>
<?php 
$precioTotalProducto = 0;
$precioTotal = 0;
$i = 1;
$noProductos = true;

foreach($listaProductos as $producto){
	echo '<tr>';
	foreach ($producto->imagenes as $imagen) {
		$noProductos = false;
		echo '<td><img src="'.Yii::app()->theme->baseUrl.'/img/productos/'.$imagen->imagen.'" width="90" />';
		break;
	}
	
	$precioTotalProducto = $producto->cantidad * $producto->precio;
	$precioTotal = $precioTotal + $precioTotalProducto;
	echo '</td><td style="vertical-align:top;"></br><p>'.$producto->titulo.'</p><p>'.$producto->descripcion.'</p></td>
	<td class="textoCarrito">'.$producto->cantidad.'</td>
	<td class="textoCarrito">$'.$producto->precio.'</td><td class="textoCarrito">$'.$precioTotalProducto.'</td>
	<td class="textoCarrito"><a href="'.Yii::app()->homeUrl.'?r=carrito/borrarProducto&idProducto='.$producto->idProductos.'">Borrar</a></td></tr>';
	$precioTotalProducto = 0;
	$i = $i + 1;
}
?>
<!-- Boton -->
<tr><td class="textoCarrito" colspan="2">
<?php 
if ($noProductos){
	echo 'El Carrito esta vacio.';
}
else{
echo '<a href="'.Yii::app()->createUrl("/carrito/comprar").'">' ;
echo '<input type="image" src="https://argentina.dineromail.com/imagenes/botones/pagar-medios_c.gif" border="0" name="submit" alt="Pagar con DineroMail"></a>';
}
?>
</td>
<td colspan="2" class="textoCarrito">Total</td><td class="textoCarrito">$<?php echo $precioTotal?></td></tr>

</table>


</div>