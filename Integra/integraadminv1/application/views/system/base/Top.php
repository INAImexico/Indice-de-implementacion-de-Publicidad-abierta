<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <title>
<?php
   echoD3D('page_title'); 
?>
   </title>
   <link rel="shortcut icon" href="<?php echo URL_BASE; ?>images/pin_publicidad.png" />
   <link rel="stylesheet" media="all" type="text/css" href="<?php echo URL_BASE; ?>css/style.css" />   
   <link rel="stylesheet" href="<?php echo URL_BASE; ?>css/pushy.css">

<?php 
   $liga = getD3D("group_act") . getD3D("page_act");
?>
   <script src="<?php echo URL_BASE; ?>slider/js/jquery-1.7.1.min.js"></script>
   <link href="<?php echo URL_BASE; ?>slider/css/default.css" rel="stylesheet" type="text/css" media="screen" />
   <link href="<?php echo URL_BASE; ?>slider/css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />

   <script type="text/javascript" src="<?php echo URL_BASE; ?>slider/js/jquery.nivo.slider.pack.js"></script>
   <script type="text/javascript" src="<?php echo URL_BASE; ?>slider/js/jquery.cslider.js"></script>
   <script type="text/javascript" src="<?php echo URL_BASE; ?>slider/js/modernizr.custom.28468.js"></script>
   <script type="text/javascript">	
      $(window).load(function() {
         $('#slider').nivoSlider();
      });
   </script>
   
   <link href="<?php echo URL_BASE; ?>css/bootstrap.min.css" rel="stylesheet">
   <script src="<?php echo URL_BASE; ?>js/jquery.min.js"></script>
   <script src="<?php echo URL_BASE; ?>js/bootstrap.min.js"></script>
</head>

<div class="rellenar"></div>
    <div class="container">
		<div class="row">
			<div class="col-xs-4 col-md-4"> 
				<a href="http://inicio.inai.org.mx" target="_blank">
				<img src="<?php echo URL_BASE; ?>img/INAIheader.png" style="max-width: 100%; height: auto; margin-top:30.25px;"/>
				</a>
			</div>
            <div class="col-xs-4 col-md-4">
				<a>
				<img src="<?php echo URL_BASE; ?>img/Publicidad_1.png" style="position: absolute; left: 0; right: 0; margin: auto; margin-top:23.75px; max-width: 100%; height: auto;"/> 
				</a>
			</div> 
		    <div class="col-xs-4 col-md-4">
				<a href="http://publicidadabierta.inai.org.mx/index.php/tpov1" target="_blank">
		        <img src="<?php echo URL_BASE; ?>img/Publicidad.png" style="float: right; max-width: 100%;  height: auto;"
		        onmouseout="this.src='<?php echo URL_BASE; ?>img/Publicidad.png';" 
				onmouseover="src='<?php echo URL_BASE; ?>img/Publicidadhover.png';"/>
		        </a>
			</div>
		</div>
    </div>
      

