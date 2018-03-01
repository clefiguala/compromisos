<?php
session_start();
//$opcion =addslashes( $_POST["opcion"]);

//include_once('lib/conexion.php');
//$link=conexion();
$fecha_act=date("d-m-Y"); 

//seguimiento al usuario
//include_once("log_portal2.php");

//echo("1");

//json_encode($datos_acad);





/************************ Login *********************/
   // if($opcion == 1) { 
$user = addslashes($_POST["txt_rut"]);
$pass = addslashes($_POST["txt_pass"]);

$sql_validar="";

if($user==" " || $pass==" "){
header("Location: index.php");
exit();
}
else{
if ($user=="17440197" && $pass=="123"){//academico
$usuario[] = array(
					"nombre"=>'Catalina Lefiguala Banda', 
					"rut_completo"=>'17440197-7', 
					"rut"=>'17440197',
					"nacimiento"=>'21/02/1990',
					"ingreso"=>'03/03/2014',
					"categoria"=>'Titular',
					"planta"=>'Permanente',
					"adscripcion"=>'buscar',
					"tipo"=>'1' //1 academico, 2 administrador
			    );

echo json_encode($usuario);
}
else if ($user=="17881197" && $pass=="123"){//administrador
$usuario[] = array(
					"nombre"=>'Gabriela Lefiguala Banda', 
					"rut_completo"=>'17881197-7', 
					"rut"=>'17881197',
					"nacimiento"=>'14/04/1992',
					"ingreso"=>'03/06/2015',
					"categoria"=>'Titular',
					"planta"=>'Permanente',
					"adscripcion"=>'buscar',
					"tipo"=>'2' //1 academico, 2 administrador,3 no existe
			    );
echo json_encode($usuario);
}
else{ // usuario no existe

$usuario[] = array(
					"tipo"=>'3' //1 academico, 2 administrador, 3 no existe
			    );

echo json_encode($usuario);
}
}
  // }
 
 // if($opcion == 2){
 // $sql_buscar="";


// $data[] = array(
					// "nombre"=>'Catalina Lefiguala Banda', 
					// "rut_completo"=>'17440197-7', 
					// "rut"=>'17440197',
					// "nacimiento"=>'21/02/1990',
					// "ingreso"=>'03/03/2014',
					// "categoria"=>'Titular',
					// "planta"=>'Permanente',
					// "adscripcion"=>'buscar');
					
// header('Content-Type: application/json');					
 // echo json_encode($data);
 // }

/************************ Acceso Administrador *********************/
 // if($user == 2) {
 
 // include_once("panel_admin.php");
 
 // } 


?>