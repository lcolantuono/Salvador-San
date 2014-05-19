<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Salvador San Neuqu&eacute;n</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Millain Matias - Colantuono Lucas">
	
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<style>
/* these styles are for the demo, but are not required for the plugin */
.zoom {
	display:inline-block;
	position: relative;
	border: 1px solid green;
}

/* magnifying glass icon */
.zoom:after {
	content:'';
	display:block;
	width:33px;
	height:33px;
	position:absolute;
	top:0;
	right:0;

}

.zoom img {
	display: block;
}

.zoom img::selection { background-color: transparent; }

#ex2 img:hover { cursor: url(grab.cur), default; }
#ex2 img:active { cursor: url(grabbed.cur), default; }
</style>
<!-- <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script> CONFLICTO SLIDER --> 
<script type="text/javascript" src='<?php echo $baseUrl;?>/js/jquery.zoom.js'></script>
<script>
$(document).ready(function(){
	$('#ex1').zoom();
		
});
</script>

    <!-- Boton desplegable carrito -->

<script type="text/javascript">
$(function(){
	<?php echo CHtml::ajax(array('url'=>array('carrito/listarCarritoAjax'),'update'=>'#req_res'));?>
	$("#mostrar").click(function(event) {
	event.preventDefault();
	$("#req_res").slideToggle();
});
$("#req_res a").click(function(event) {
	event.preventDefault();
	$("#req_res").slideUp();
});
});

</script>
<style type="text/css">
#req_res {
	width:400px;
	display: none;
	padding:5px;
	border:2px solid #FADDA9;
	background-color:white;
}
#mostrar{
	display:block;
	width:99%;
	margin-top: 5px;
	padding:5px;
	border:2px solid #D0E8F4;
	background-color:#ECF8FD;
}
</style>



    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap-responsive.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pontano+Sans'>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/nivo-slider.css" >
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/lightbox/css/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/template.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style1.css" />
      
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/swfobject/swfobject.js"></script>
	<script type="text/javascript" src="<?php echo $baseUrl;?>/js/lightbox/js/lightbox.js"></script>
    <!-- style switcher -->
    <script type="text/javascript" src="<?php echo $baseUrl;?>/js/styleswitcher.js"></script>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

    <!-- The fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $baseUrl;?>/img/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-57-precomposed.png">
  </head>

<body>
<section id="header">
<!-- Include the header bar -->
    <?php include_once('header.php');?>
<!-- /.container -->  
</section><!-- /#header -->