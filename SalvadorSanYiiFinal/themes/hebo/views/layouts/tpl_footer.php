<section id="bottom" class="">
	<div class="container bottom">
		<div class="row-fluid ">
			

			<div class="span2">
				<h5>B&uacute;squeda</h5>
				<ul class="list-blog-roll">
					<li><a href="<?php echo Yii::app()->homeUrl?>">Inicio</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/productos/index&marca_idMarca=1')?>">Salvador San</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/productos/index&marca_idMarca=2')?>">Mancha Real</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/site/page&view=local')?>">Nuestro local</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('/site/page&view=contacto')?>">Contacto</a></li>
				</ul>

			</div>
			<!-- /span3-->

			
			<!-- /span3-->

			<div class="span2">
				<h5>Contact&aacute;nos </h5>
				<p>
					Roca 71<br /> Neuqu&eacute;n Capital<br /> Tel&eacute;fono:
					456-7890<br /> E-Mail: ssnqn@gmail.com<br />

				</p>
				<br>
			</div>
			
			<div class="span2">
				<h5>Segu&iacute;nos en</h5>
				<p>

					<a href="https://www.facebook.com/SALVADORSANNQN"><img
						src="<?php echo $baseUrl;?>/img/Facebook_24x24.png"> Facebook</a>
					<br />
				</p>
			</div>
			
			<div class="span3">
				<img src="<?php echo $baseUrl;?>/img/salvadornegro.png" width="180">
			</div>
			<div class="span3">
				<img src="<?php echo $baseUrl;?>/img/mancharealnegro2.png">
			</div>
			<!-- /span3-->
		</div>
		<!-- /row-fluid -->
	</div>
	<!-- /container-->
</section>
<!-- /bottom-->

<footer>
	<div class="footer">
		<div class="container">&copy; <?php echo date('Y'); ?>. Todos los derechos reservados. Salvador San Neuqu&eacute;n. Programaci&oacute;n web Millain-Colantuono. <?php echo Yii::powered(); ?></div>
	</div>
</footer>

<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-transition.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-alert.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-modal.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-dropdown.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-scrollspy.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-tab.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-tooltip.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-popover.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-button.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-collapse.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-carousel.js"></script>
<script
	src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap-typeahead.js"></script>
<script
	type="text/javascript"
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>


</body>
</html>
