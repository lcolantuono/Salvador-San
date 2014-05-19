<div class="container">
<div class="row-fluid">
  <div  class="logoHeader">
        <img alt="" src="<?php echo $baseUrl;?>/img/logo.jpeg" width="140">
  </div>
  <div class="span6" style="">
		<img src="<?php echo $baseUrl;?>/img/SSN.png">
  </div>
  
  
   
  <div>
  	<p style="font-size: x-small;text-align: right;">Televentas: 0299-4567890 - Mail: SalvadorSanNqn@gmail.com</p>
  	<p style="text-align: right;">
  	
  	<?php if(Yii::app()->user->isGuest):?>
  	<!-- <a href="<echo Yii::app()->createUrl('/compra/index&idUsuario='.Yii::app()->user->getState('idUsuario'));?>"><b>Mis Compras</b></a> -->
  	
  	<a href="<?php echo Yii::app()->createUrl('/usuario/create'); ?>">Registrarse</a>
  	<a href="<?php echo Yii::app()->createUrl('/site/login'); ?>">Login</a></p>
  	<?php endif;?>
  </div>
  
  <div style="float:right">
  <!-- LISTAR CARRITO VIA AJAX -->
<a href="#" id="mostrar">VER CARRITO<img src="<?php echo $baseUrl;?>/img/iconoCart.png" width="30"></a>
<div id="req_res" style="display:none; position:absolute; right: 40px; width: 278px;">
El carrito se encuentra vacio
</div>

  <div class="btn-toolbar">
    <?php /* $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary',// '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Ver Carrito', 'items'=>array(
                array('label'=>'Ver items', 'url'=>'#'),
            )),
        ),
    )); */ ?>
</div>
  </div>
</div><!--/.row-fluid header -->
</div>

