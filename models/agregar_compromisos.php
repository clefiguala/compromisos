<?php
//var_dump(json_decode($_POST['datos']));
$data=$_POST['data'];

$anho = $data['anho'];
//echo ' ';


$rut_completo = explode("-", $data['rut']);
$rut = $rut_completo[0];
$dv = $rut_completo[1];
//echo ' ';
foreach ($data['datos'] as $valor) 
{    
        $area        = $valor[area];
        $subarea_uno = $valor[nivel_uno];
        $subarea_dos = $valor[nivel_dos];
        $cantidad    = $valor[cantidad];
        $descripcion = $valor[descripcion];

        echo '$area : '.$area.' - $subarea_uno : '.$subarea_uno.' - $subarea_dos : '.$subarea_dos.' - $cantidad : '.$cantidad.' - $descripcion : '.$descripcion;
        echo '<br>';
        //aca ingresar insert::sql
 	
}



?>