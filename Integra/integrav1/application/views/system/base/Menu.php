   <?php
      $liga = getD3D("group_act") . getD3D("page_act");
   ?>
<style>
      @media (max-width: 1000px) {
         .menu {
            display: none;
         }
         .menu2 {
            display: none;
         }
         .menu-btn {
            display:  block;
         }
      }
      @media (min-width: 400px) {
         .menu {
            display: block;
         }
         .menu2 {
            display: block;
         }
         .menu-btn {
            display:  none;
         }
      }
   </style>
   <nav class="pushy pushy-left">
      <ul>
         <li style="width:200px;"><a href="Sys_Hub?v=Principal&g=pages">Inicio</a></li>
         <li style="width:200px;"><a href="Sys_Hub?v=QueEs&g=pages">    ¿Qué es?</a></li>
         <li style="width:200px;"><a href="Sys_Hub?v=Contacto&g=pages"> Contacto</a></li>
      </ul>
   </nav>
<div class="site-overlay"></div>
	<div class="menu" style=" background:#0277bd; position:fixed; z-index:1; top:106.4px;margin:auto;width:100%;">
		<div class="col-xs-2 col-md-2"></div>
		<div class="col-xs-2 col-md-2"><a href="Sys_Hub?v=Principal&g=pages" <?php if (($liga === 'pages/Principal') or ($liga === '')) { echo 'id="primero"'; } ?> >Inicio</a></div>
		<div class="col-xs-4 col-md-4"><a href="Sys_Hub?v=QueEs&g=pages" <?php if ($liga === 'pages/QueEs') { echo 'id="primero"'; } ?> >Sobre el proyecto</a></div>
		<div class="col-xs-2 col-md-2"><a href="Sys_Hub?v=Contacto&g=pages" <?php if ($liga === 'pages/Contacto') { echo 'id="primero"'; } ?> >Contacto</a></div>
	</div>
<br><br><br><br><br><br><br><br>	       
<div class="page">
	<table width="100%"> 
    <tr>
    	<td width="30%" align="left"> 
        	<h6 style="margin:20px;">Fecha de actualización:  
            	<?php foreach($fechaact as $fecha) { echo $fecha->last_update . '.'; } ?>
            </h6>
        </td>
    </tr>
    </table> 
</div>