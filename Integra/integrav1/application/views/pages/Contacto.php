<link href="<?php echo URL_BASE; ?>css/bootstrap.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="<?php echo URL_BASE; ?>js/jquery.min.js"></script>
<script src="<?php echo URL_BASE; ?>js/bootstrap.min.js"></script>

<div class="container" style="width:60%;margin:auto;max-width:60%;min-width:60%;">
   <div class="page">
   <center>
      <h3 class="blog-post-title" style="font-size: 33px; font-family: 'Dosis', sans-serif;color:#000;font-weight: normal;">
      Contacto</h3>
      <img src="../plugins/base/img/pleca.png" />
   </center>
   
      <div style="margin:auto;">
         <br> 

<form role="form" action="Sys_Hub?v=DoContacto&g=pages" method="post">
  <div class="form-group">
    <label for="nombre">* Nombre:</label>
    <input type="text" class="form-control" name="nombre" id="nombre" required>
  </div>
  <div class="form-group">
    <label for="email">* Correo:</label>
    <input type="email" class="form-control" name="correo" id="correo" required>
  </div>
  <div class="form-group">
    <label for="asunto">* Asunto:</label>
    <input type="text" class="form-control" name="asunto" id="asunto" required>
  </div>
  <div class="form-group">
    <label for="mensaje">* Mensaje:</label>
    <textarea class="form-control" name="mensaje" id="mensaje" rows="3" required></textarea>
  </div>
  
  <div class="form-group">
    <textarea class="form-control" name="privacidad" id="privacidad" rows="17" style="text-align:justify;" required readonly>
Aviso de privacidad

El Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales (INAI), con domicilio en Av. Insurgentes Sur, No. 3211, Col. Insurgentes Cuicuilco, Alcaldía Coyoacán, C.P. 04530, Ciudad de México, es el responsable del tratamiento de los datos personales que nos proporcione, los cuales serán protegidos conforme a lo dispuesto por la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, y demás normatividad que resulte aplicable.

¿Qué datos personales recabamos y para qué fines?

Sus datos personales serán utilizados con la finalidad de enviar vía correo electrónico la respuesta al mensaje que haya hecho llegar a través de la sección de “Contacto” del índice de Publicidad Abierta. Para la finalidad antes señalada se recabará el siguiente dato personal: correo electrónico. Se informa que no se recabarán datos personales sensibles.

Fundamento para el tratamiento de datos personales 

El tratamiento de sus datos personales se realiza con fundamento en los artículos 42, fracción V y 57 de la Ley General de Transparencia y Acceso a la Información Pública, 21, fracción VII de la Ley Federal de Transparencia y Acceso a la Información Pública, y 89, fracciones XII y XXIV de la Ley General de Protección de Datos Personales en Posesión de los Sujetos Obligados.

¿Dónde puedo ejercer mis derechos ARCO?

Usted podrá ejercer sus derechos de acceso, rectificación, cancelación u oposición de sus datos personales (derechos ARCO) directamente ante la Unidad de Transparencia de este Instituto, ubicada en Avenida Insurgentes Sur 3211, en la colonia Insurgentes Cuicuilco, Alcaldía Coyoacán, C.P. 04530, Ciudad de México, o bien, a través de la Plataforma Nacional de Transparencia (https://www.plataformadetransparencia.org.mx) o en el correo electrónico unidad.transparencia@inai.org.mx. Si desea conocer el procedimiento para el ejercicio de estos derechos puede acudir a la Unidad de Transparencia, enviar un correo electrónico a la dirección antes señalada o comunicarse al Telinai 01800 8354324. 

Transferencia de datos personales 

Se informa que no se realizarán transferencias de datos personales, salvo aquéllas que sean necesarias para atender requerimientos de información de una autoridad competente, que estén debidamente fundados y motivados. 

Cambios al aviso de privacidad

En caso de que exista un cambio de este aviso de privacidad, se notificará por correo electrónico a los suscriptores de la herramienta índice de Publicidad Abierta.
    </textarea>
  </div>

  <div class="form-group">
    <input type="checkbox" name="acepto" value="acepto" required> Acepto Aviso de privacidad de datos.<br>
  </div>

  <center>
     <button type="submit" class="btn btn-default">Guardar</button>
  </center>
</form>

      </div>
   </div>
</div>  



<script>
   document.getElementById("nombre").focus();
</script>
