<!-- JS EVENTOS CHECK Y TEXTAREA -->
<script type="text/javascript" src="js/control_check.js"></script> 
<script type="text/javascript" src="controller/peticiones.js"></script> 
<script>
$(document).ready(function() {
			
			document.getElementById("inputname").value=nombre;
			document.getElementById("inputrut").value=rut_completo;
			document.getElementById("inputnacimiento").value=nacimiento;
			document.getElementById("inputingreso").value=ingreso;
			document.getElementById("inputcategoria").value=categoria;
			document.getElementById("inputplanta").value=planta;
			document.getElementById("inputadscrip").value=adscripcion;
});
</script>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Docente:Titular</h3>
  </div>
  <div class="panel-body">
  <form class="form-horizontal">
    <div class="form-group">
      <div class="col-sm-12"><label>Nombre</label><input class="form-control" id="inputname" type="text" readonly></div>
    </div>
    <div class="form-group">
      <div class="col-sm-4"><label>Rut</label><input class="form-control" id="inputrut" type="text" readonly></div>
      <div class="col-sm-4"><label>Nacimiento</label><input class="form-control"  type="text" id="inputnacimiento" readonly></div>
	  <div class="col-sm-4"><label>Ingreso UCT</label><input class="form-control" id="inputingreso" type="text" readonly></div>
    </div>
	<div class="form-group">
      <div class="col-sm-4"><label>Categoria</label><input class="form-control" type="text" id="inputcategoria" readonly></div>
	  <div class="col-sm-4"><label>Planta</label><input class="form-control" type="text" id="inputplanta" readonly></div>
	  <div class="col-sm-4"><label>Adscripcion</label><input class="form-control" type="text" id="inputadscrip" readonly></div>
    </div>
  </form>
</div>
</div>


<style>
input[type="number"]{
 width: 70%;
}
input[type="checkbox"]{
 transform:scale(1.5);
 padding-right: 5px;
}
input[type="radio"]{
 transform:scale(1.5);

}
.opcionCheck
{
	width: 75% ;
	text-align: left !important;
	
}
.letraTab{
    font-size:14px;
	font-weight: bold;
}
</style>
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-pills" role="tablist" id="#myTabs">
		<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Docencia</a></li>
		<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Producción intelectual</a></li>
		<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Extensión y vínculo</a></li>
		<li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Gestión</a></li>
	</ul>

	  <!-- Tab panes -->
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="tab1">
			<div class="panel panel-default" >
				<div class="panel-body">
					<?php include("tabs/tab_docencia.php");?>
				</div>
			</div>
		</div>
	    <div role="tabpanel" class="tab-pane" id="tab2">
			<div class="panel panel-default" >
				<div class="panel-body">
					<?php include("tabs/tab_produccion_intelectual.php");?>	
				</div>
			</div>
		</div>
	    <div role="tabpanel" class="tab-pane" id="tab3">
			<div class="panel panel-default" >
				<div class="panel-body">
					<?php include("tabs/tab_extension_vinculo.php");?>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="tab4">
			<div class="panel panel-default" >
				<div class="panel-body">
					<?php include("tabs/tab_gestion.php");?>
				</div>
			</div>
		</div>
	</div>
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-10">
				<button type="button" class="btn btn-primary pull-right">
				<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir </button>
			</div>
			<div class="col-sm-2">
				<button id="GuardarCompromiso" type="button" class="btn btn-primary pull-right" >
				<span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar </button>

			</div>
		</div>
	</div>
</div>



 

 
