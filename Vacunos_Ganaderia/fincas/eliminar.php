<?php

$contrasena = "";
$usuario = "root";
$nombre_base_de_datos = "vacunos_ganaderia";
if
($mysqli = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contrasena))
{
    echo "Eliminado con Exito ";
    header("refresh: 1;fincas.php");

}else{
    echo "Ocurrió algo con la base de datos: ";
}


$id=$_GET['id'];

$sql = $mysqli->prepare("DELETE FROM fincas WHERE Id_F =:id");
$sql ->bindParam(":id",$id);

$sql->execute();

?>