<!DOCTYPE html> 
<html dir="ltr" lang="en-US">

<head>
    
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Dircom" />
    
    <!-- ============================================
        Stylesheets
    ============================================= -->
  <link href="css/google_fonts.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="CSS/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/nav_vertical.css" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
	
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> 
	<script type="text/javascript" src="js/validacion_login.js"></script> 
	

    <!-- ============================================
        Document Title
    ============================================= -->
	
	
  <title>Universidad Católica de Temuco</title>  
  
 <script>
 var nombre,rut_completo,nacimiento,ingreso,categoria,planta,adscripcion;
 
$(document).ready(function() {
 $("form[name='form_login']").submit(function() {  

              $.ajax({
                  type: 'POST',
                  url: 'login.php',
                  data: $(this).serialize(),
				  dataType : 'json',
                  beforeSend: function()
                  {
				  if(!validacion())
				  {
				  return false;
				  }

                  },
                  success: function(data) 
                  { 
				    var permiso=data[0].tipo;
					
                    if(permiso == "3"){ // usuario invalido
					alert("usuario no existe!");
					//window.location.replace("index.php");
					location.href="index.php";
					}
					else{
					nombre=data[0].nombre;
					rut_completo=data[0].rut_completo;
					nacimiento=data[0].nacimiento;
					ingreso=data[0].ingreso;
					categoria=data[0].categoria;
					planta=data[0].planta;
					adscripcion=data[0].adscripcion;
				  
                    if(permiso == "1"){
					  $("#contenido").load("menu_acad.php");
					  document.getElementById("usuario_login").value = data[0].tipo;//academico
                    }if(permiso == "2"){
					$("#contenido").load("panel_admin.php");
					document.getElementById("usuario_login").value = data[0].tipo;//administrador
                    }
					}
					
                  }
				  ,
		error: function (jqXHR, textStatus, errorThrown) {
			alert(errorThrown);
			}
              })
            
              return false;

        });
});
</script>
 
 
</head>

<body>
	
<div class="barra-uct">
		<div class="contenedor-barra">
			<a href="http://www.uctemuco.cl/i.php" target="_blank"><div class="ir-uctemuco fl"></div></a>
			<div class="menu fl">
				<a href="http://webmail.uct.cl/" target="_blank"><div class="webmail fl" title="Webmail"></div></a>
				<a href="http://directorio.uct.cl/" target="_blank"><div class="directorio fl" title="Directorio"></div></a>
				<a href="http://intranet.uctemuco.cl/" target="_blank"><div class="intranet fl" title="Intranet"></div></a>
				<a href="http://www.uct.cl/contacto/" target="_blank"><div class="contacto fl" title="Contacto"></div></a>
				<a href="http://vocaciondefuturo.uct.cl" target="_blank"><div class="postgrado fl" title="Postgrado"></div></a>			
				

			</div>
			<div class="redes-barrauct fr">
				<a href="https://www.facebook.com/canaluctemuco?ref=hl" target="_blank"><div class="facebook fl" title="Facebook"></div></a>
				<a href="https://twitter.com/UC_Temuco" target="_blank"><div class="twitter fl" title="Twitter"></div></a>
				<a href="https://www.youtube.com/user/canaluctemuco" target="_blank"><div class="youtube fl" title="Youtube"></div></a>
				<a href="https://www.flickr.com/photos/uc_temuco/sets/" target="_blank"><div class="flickr fl" title="Flickr"></div></a>
				<a href="http://issuu.com/uc_temuco/stacks" target="_blank"><div class="issuu fl" title="Issuu"></div></a>
			</div>

		</div>
	</div>

    <div id="wrapper" class="clearfix">
	<div id="header" class="header3">
    <div class="container clearfix">
     <div id="logo">
                </div></div>

            <div id="primary-menu">           
                <div class="container clearfix">
                     <ul id="main-menu">
                    
                        <li class="current">
                            <a href="index2.php"><div>INICIO</div></a>                       
                        </li>
                        
                        <li>
                            <a  href="http://prensa.uct.cl/" TARGET="_blank"><div>NOTICIAS</div></a> 
                        </li> 
                        
                        <li>
                            <a href="http://www.uctemuco.cl/calendario-academico/" TARGET="_blank"><div>CALENDARIO</div></a>                    
                        </li>
                        
                        <li>
                           <a href="http://educa.uct.cl/" TARGET="_blank"><div>EDUCA</div></a> 
                        </li>
                 </ul>   
                </div>               
            </div>
        </div>
		<!-- Guardar datos login ************************ -->
		<input type="hidden" id="usuario_login">
		<!--********************************************* -->
<div id="contenido">      
<div id="content">
<div style="background: rgba(26, 26, 44, 0.8);">					
<?php //include("sesion.php");?>
<section id="containers">
<h2 style="color:white">Iniciar sesión</h2></br>
<form name="form_login" id="hongkiat-form" method="post"> <!--  onsubmit='return validacion()' onblur=asignar()-->
<div id="wrapping" class="clearfix">
	<section id="aligned">
	<input type="text" name="txt_rut" id="rut" placeholder="Rut sin puntos ni guión" autocomplete="off" tabindex="1" class="txtinput" style="width: 280px">

	<input type="password" name="txt_pass" id="pass" placeholder="Contraseña" autocomplete="off" tabindex="2" class="txtinput" style="width: 280px">
	</section>
		
</div>

<section id="buttons">
	<center>
	
	<input type="submit" name="submit" id="submitbtn" class="submitbtn" tabindex="7" value="Entrar">
	</center>
	<br style="clear:both;">
	<br style="clear:both;">
<center>
<a href="recuperar_contrasena2.php" target="_blank"  style="display:  inline-block; font-size:15px; color:white; " onclick="window.open(this.href,this.target,'width=550,height=500,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Recuperar Contraseña</a>
</center>
<!--
	<a href="recuperar_contrasena.php" target="_blank"  style="display:  inline-block; font-size:15px; color:white; " onclick="window.open(this.href,this.target,'width=800,height=450,top=200,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Recuperar mi contraseña</a> 
 -->
</section>
<p style="color: red; font-family: 'Open Sans' serif; font-size:17px; text-shadow: -1px -1px 1px #000, 1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000;">
		
</p>
</form>

</section>
</div>   
 </div><!-- content -->
 </div><!-- contenido -->

</div>
  <?php include("footer.php");?>
  
  <div id="gotoTop" class="glyphicon glyphicon-menu-up"></div>
   <!-- <script type="text/javascript" src="js/custom.js"></script>	
	--> 	
</body>

</html>
