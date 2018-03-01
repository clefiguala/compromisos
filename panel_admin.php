 <script>
 
$(document).ready(function() {

document.getElementById("titulo_panel").innerHTML ="Bienvenido(a): "+nombre;
	
$("#opcion1").click(function(){
			//$("#menu_derecha").html("<center><img src='images/loader3.gif' style='margin-top: 250px;'/><p style='margin-top:-8px; margin-left: 10px;''> Cargando...</p><center><br><br>").show();
			//$("#menu_derecha").load("panel_acad.php");
});
});
</script>
<div class="row">  
<div class="col-xs-3">
<ul class="ca-menu">      
 <li>
	<a href="#" id="opcion1">
		<span class="ca-icon"><img src="./images/icons/encuesta.png"></span>
		<div class="ca-content">
			<h2 class="ca-main">&nbsp;Ingresar Compromisos</font></h2>
			<h3 class="ca-sub">Registrar compromisos academicos obligatorios.</h3>
		</div>
	</a>
</li>

<li>
	<a href="#" id="opcion2">
		<span class="ca-icon"><img src="./images/icons/inscripcion-cursos.png"></span>
		<div class="ca-content">
			<h2 class="ca-main">&nbsp;Ingresar Extras</h2>
			<h3 class="ca-sub">Registrar compromisos academicos extras.</h3>
		</div>
	</a>
</li>
		  
<li>
	<a href="index.php">
		<span class="ca-icon"><img src="./images/icons/cerrar-sesion.png" style="margin-right:8px;"></span>
		<div class="ca-content">
			<h2 class="ca-main">Cerrar sesión</h2>
			 <h3 class="ca-sub" style="width:180px; line-height: 1.3em; margin-top:-3px;">Cerrar sesión en el sistema.</h3>
		</div>
	</a>
</li>

</ul>
</div>
<div class="col-xs-9"style="margin:20px auto">
<?php //include("buscador_acad.php");?>

<div class="panel panel-info">
<div class="panel-heading">
<div class="row">
<div class="col-xs-1">
<h3 class="panel-title">Perfil:</h3>
</div>
<div class="col-xs-4">
<select class="form-control">
<option>Administrador</option>
<option>Academico</option>
</select>
<!--
<ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
  <li><a href="#">Administrador</a></li>
  <li><a href="#">Academico</a></li>
</ul>-->

</div>
<div class="col-xs-3">
<!--<input type="text" class="form-control" placeholder="Rut Academico">-->
</div>
<div class="col-xs-2">
<!--<button type="button" class="btn btn-primary pull-right">
<span class=" glyphicon glyphicon-search" aria-hidden="true"></span></button>-->
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#busca_acad">
<span class=" glyphicon glyphicon-search" aria-hidden="true"></span> Buscador</button>
</div>
</div>
</div>
<div class="panel-body">
<h3 class="panel-title" id="titulo_panel"></h3><!--Bienvenido(a): Catalina Lefiguala Banda-->
<br><span style='width: 500px; float: left; height: 5px; background-color: #FFBF00; postion: relative;' /> 
<span style='background-color: #0075b5; width: 100px; float:left; height: 5px; position:relative;'/><br>
</span>
</span>
<br>
<br>
</div>
</div>
<!-- buscador academicos ventana-->
<div class="modal fade" id="busca_acad" role="dialog">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="color: red">BUSCADOR ACADÉMICOS</h4>
</div>
<div class="modal-body">
<div class="panel panel-info">
<div class="panel-heading">
<div class="row">
<div class="col-xs-2">
<h3 class="panel-title">Buscar por:</h3>
</div>
<div class="col-xs-3">
<select class="form-control">
<option>NOMBRE</option>
<option>RUT</option>
</select>
</div>
<div class="col-xs-2">

</div>
<div class="col-xs-3">
<input type="text" class="form-control" placeholder="">
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
<span class=" glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
</div>
</div>
</div>
<div class="panel-body">
<table class="table table-bordered">
<thead>
<tr class="success">
<th>Rut</th>
<th>Nombre</th>
<th>Categoria</th>
<th>Planta</th>
<th>Ingreso UCT</th> 
<th>Seleccionar</th>
</tr>
</thead>
<tbody>
<tr>
<td>17.440.197-7</td>
<td>Catalina Lefiguala Banda</td>
<td>Titular</td>
<td>Permanente</td>
<td>03/03/2014</td> 
<td>					
<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" style="text-align: center ">
</td>
</tr>
<tr>
<td>19.009.342-5</td>
<td>Homero Simpsons</td>
<td>Asociado</td>
<td>Adjunto</td>
<td>03/03/2016</td>
<td>
<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">
<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Salir</button>
</div>
</div>
</div>
</div>

</div>
</div>        
		