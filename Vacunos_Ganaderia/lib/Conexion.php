<?php

$contraseña = "vc648khclp6p1v1q";
$usuario = "h66vns8stpfzqkir";
$nombre_base_de_datos = "gmrle9htskupfott";
try{
	$base_de_datos = new PDO('mysql://h66vns8stpfzqkir:vc648khclp6p1v1q@uzb4o9e2oe257glt.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>