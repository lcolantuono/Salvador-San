<?php
/* @var $this ProductosController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php 

$active1 = false;
$active2 = false;
$active3 = false;

$urlTodas = 'productos/index&marca_idMarca=';
$urlSalvador = 'productos/index&marca_idMarca=1';
$urlMc = 'productos/index&marca_idMarca=2';

if(isset($_GET['categoria_idCategoria'])){

	$cat = $_GET['categoria_idCategoria'];	
	$urlTodas = 'productos/index&marca_idMarca=&categoria_idCategoria='.$cat;
	$urlSalvador = 'productos/index&marca_idMarca=1&categoria_idCategoria='.$cat;
	$urlMc = 'productos/index&marca_idMarca=2&categoria_idCategoria='.$cat;
}


if($_GET['marca_idMarca']==''){
		$active1 = true;	
}

if($_GET['marca_idMarca']==1){
	$active2 = true;
}

if($_GET['marca_idMarca']==2){
	$active3 = true;
}

?>

<div class="span7 novedades">
	<div class="tituloContenedor" style="text-align: center">
	
		<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
				'type' => 'primary',
				'toggle' => 'radio', // 'checkbox' or 'radio'
				'buttons' => array(
        array('label'=>'Todas','url'=>array($urlTodas), 'active'=>$active1),
        array('label'=>'Salvador San','url'=>array($urlSalvador), 'active'=>$active2),
        array('label'=>'Mancha Real','url'=>array($urlMc), 'active'=>$active3),
    ),
)); ?>
	</div>
	
	
	<div class="contProdWidget">
<div><?php 
if($_GET['marca_idMarca']==1){
	echo '<p><img src="'.yii::app()->theme->baseUrl.'/img/salvadorsanProdu.png" width="300"></p>';
} 
if($_GET['marca_idMarca']==2){
	echo '<p><img src="'.yii::app()->theme->baseUrl.'/img/mancharealProd.png" width="300"></p>';
}

if($_GET['marca_idMarca']==''){
	echo '<h1>Todas las marcas</h1>';
}

?></div>
	<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider->search(),
	'itemView'=>'_view',
));  ?>

</div>
</div>
