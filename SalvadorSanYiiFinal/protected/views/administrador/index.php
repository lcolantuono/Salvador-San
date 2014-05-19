<?php
/* @var $this AdministradorController */

$this->breadcrumbs=array(
	'Administrador',
);
?>
<h1>Administrador del sitio</h1>

<h3>Productos</h3>
<ul>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=productos/admin">Administrador de Productos</a></li>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=productos/create">Nuevo producto</a></li>
</ul>

<h3>Menu Principal</h3>
<ul>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=marca/admin">Administrador de Marcas</a></li>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=marca/create">Nueva marca</a></li>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=categoria/admin">Administrador de Categorias</a></li>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=categoria/create">Nueva categoria</a></li>
</ul>

<h3>Slider</h3>
<ul>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=slider">Ver Im&aacute;genes cargadas</a></li>
</ul>

<h3>Usuarios</h3>
<ul>
<li><a href="<?php echo Yii::app()->baseUrl?>/index.php?r=usuario/admin">Administrardor de Usuarios</a></li>
</ul>



