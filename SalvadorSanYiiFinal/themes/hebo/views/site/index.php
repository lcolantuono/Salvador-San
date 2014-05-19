    <div class="slider-bootstrap"><!-- start slider -->
    
        <div style="width:268px; height:452px;float: right; margin-top: 5px;" >
   		 <a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=productos/index&marca_idMarca=1"><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/promoMancha.jpg"/></a>
   		 <a href="<?php echo Yii::app()->baseUrl;?>/index.php?r=productos/index&marca_idMarca=2"><img align="bottom" src="<?php echo Yii::app()->theme->baseUrl;?>/img/promoSalvador.jpg"/></a>
    </div>
    	<div class="slider-wrapper theme-default">
            <?php $this->widget('ext.widgets.SliderWidget'); ?>
        </div>
        
		<!-- <div></div>-->

    </div> <!-- /slider -->
    
    
    
    <div class="shout-box shout-text">
          	<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/shout-text.png">        
    </div>    
     <!--/row-fluid-->
        
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
    
     <script type="text/javascript">
    $(function() {
        $('#slider-nivo').nivoSlider({
			effect: 'boxRandom',
			manualAdvance:false,
			controlNav: false
			});
    });
    </script> <!--<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-nivo2').nivoSlider();
    });
    </script>-->