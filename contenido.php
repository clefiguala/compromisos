<?php
session_start();
$rut = addslashes($_GET["rut_user"]);


 $sql_buscar="";

if($rut=='17440197'){
$data[] = array(
					"nombre"=>'Catalina Lefiguala Banda', 
					"rut_completo"=>'17440197-7', 
					"rut"=>'17440197',
					"nacimiento"=>'21/02/1990',
					"ingreso"=>'03/03/2014',
					"categoria"=>'Titular',
					"planta"=>'Permanente',
					"adscripcion"=>'buscar'
			    );

}
if($rut=='17881197'){
$data[] = array(
					"nombre"=>'Gabriela Lefiguala Banda', 
					"rut_completo"=>'17881197-7', 
					"rut"=>'17881197',
					"nacimiento"=>'14/04/1992',
					"ingreso"=>'03/06/2015',
					"categoria"=>'Titular',
					"planta"=>'Permanente',
					"adscripcion"=>'buscar'
			    );

}

					
//header('Content-Type: application/json');		
			
 echo json_encode($data);
?>