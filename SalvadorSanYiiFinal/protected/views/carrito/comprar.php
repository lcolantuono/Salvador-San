<?php
/* @var $this CarritoController */
/* @var $producto Productos */
?>
<div>
<div style="text-align:center; width:100%;height:300px;"><h1>Redireccionando a Dinero Mail</h1></div>

<form action="https://checkout.dineromail.com/CheckOut" method="post" id="formCompra">

<!-- Variables obligatorias --> 
<input type="hidden" name="change_quantity" value="0" />
<input type="hidden" name="merchant" value="3287961" />
<input type="hidden" name="country_id" value="1" />
<input type="hidden" name="payment_method_available" value="all" />


<?php 
$precioTotalProducto = 0;
$precioTotal = 0;
$i = 1;

foreach($listaProductos as $producto){
	$precioTotalProducto = $producto->cantidad * $producto->precio;
	$precioTotal = $precioTotal + $precioTotalProducto;
	
	echo '<input type="hidden" name="item_name_'.$i.'" value="'.$producto->titulo.'">
	<input type="hidden" name="item_quantity_'.$i.'" value="'.$producto->cantidad.'">
	<input type="hidden" name="item_ammount_'.$i.'" value="'.$producto->precio.'00">';
	
	$precioTotalProducto = 0;
	$i = $i + 1;
}
?>
</form>

<script type="text/javascript">

document.getElementById('formCompra').submit();


</script>
</div>