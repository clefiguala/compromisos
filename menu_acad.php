 <script>
 //var nombre,rut_completo,nacimiento,ingreso,categoria,planta,adscripcion;
 
$(document).ready(function() {
// var today = new Date();
// var dd = today.getDate();
// var mm = today.getMonth()+1; //January is 0!

// var yyyy = today.getFullYear();
// if(dd<10){
    // dd='0'+dd;
// } 
// if(mm<10){
    // mm='0'+mm;
// } 
// var today = dd+'/'+mm+'/'+yyyy;

//document.getElementById("dato_user").innerHTML ="Usuario:"+document.getElementById("usuario_login").value;
// document.getElementById("usuario_nombre").innerHTML =nombre;
// document.getElementById("usuario_fecha").innerHTML = today;
	
$("#opc1").click(function(){
			$("#menu_derecha").html("<center><img src='images/loader3.gif' style='margin-top: 250px;'/><p style='margin-top:-8px; margin-left: 10px;''> Cargando...</p><center><br><br>").show();
			$("#menu_derecha").load("panel_acad.php");
});
});
</script>
<div class="row">  
	<div class="col-xs-3" id="menu_izquierda">
	<ul class="ca-menu">      
			 <li>
				<a href="#" id="opc1">
					<span class="ca-icon"><img src="./images/icons/encuesta.png"></span>
					<div class="ca-content">
						<h2 class="ca-main">&nbsp;Ingresar Compromisos</font></h2>
						<h3 class="ca-sub">Registrar compromisos academicos obligatorios.</h3>
					</div>
				</a>
			</li>

			<li>
				<a href="#" id="opc2">
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



	<div class="col-xs-9" style="margin:20px auto" id="menu_derecha">				
		<div class="panel panel-info">
			<div class="panel-heading">
			</div>
			<div class="panel-body">
				<h3 class="panel-title">Bienvenido(a) a Bitacora</h3><!--: Catalina Lefiguala Banda-->
				<br>
				<span style='width: 500px; float: left; height: 5px; background-color: #FFBF00; postion: relative;' /> 
					<span style='background-color: #0075b5; width: 100px; float:left; height: 5px; position:relative;'/>
						<br>
						<p style='font-size: 14px;'> 
							Módulo de Compromisos de Actividades Académicas de la Universidad Católica de Temuco.
						</p>
					</span>
				</span>
				<br>
				<br>
			</div>
		</div>	
	</div>
</div> 