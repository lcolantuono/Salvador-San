<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
	<div class="container">
		<div id="content">
			<?php echo $content; ?>
		</div>
		<!-- categorias -->
		<div class="span3 categorias">
			<div class="tituloCategorias" style="background-image: url(<?php echo Yii::app()->theme->baseUrl;?>/img/categoriasF.png)">
				categorias
			</div>
			
				<?php $this->widget('ext.widgets.CategoriasWidget'); ?>
		</div>
		
		<!-- novedades -->
		<?php if(isset($this->lugar)&& $this->lugar):?>
		<div class="span7 novedades">
			<div class="tituloNovedades" style=" background-image: url(<?php echo Yii::app()->theme->baseUrl;?>/img/novedades.png);">
				NOVEDADES				
			</div>
			<?php $this->widget('ext.widgets.ProductosWidget', array('limit'=>'9','order'=>'fechayhora desc'));?>
		</div>
		
		
		<!-- tarjetas -->
		<div class="span3 categorias" style="text-align:center; clear:left; margin-top:10px">
			<div class="tituloContenedor" style="text-align:left;">Medios de pago</div>
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/dineromail.png'?>" width="180">
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/citi.jpg'?>" width="180">
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/bancofrances.jpg'?>" width="180">
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/galicia.jpg'?>" width="180"><br/><br/><br/>
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/naranja.jpg'?>" width="180"><br/><br/>
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/rio.jpg'?>" width="180"><br/><br/>
			<img src="<?php echo Yii::app()->theme->baseUrl.'/img/Tarjetas/nevada.jpg'?>" width="180"><br/><br/>
		</div>
		
		<div class="span10 infoBottom"	>
			<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/pieconten.png">
		</div>
		<?php endif?>
	</div>


</section>
<?php $this->endContent(); ?>