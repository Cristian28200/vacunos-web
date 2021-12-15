<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "..//lib/Conexion.php";
$codigo_v = $_POST["cod_v"];
$nombre_vacuno = $_POST["nom_v"];
$genero = $_POST["gen_v"];
$fecha_nacimiento = $_POST["fecha_n"];
$color_v = $_POST["color"];
$raza = $_POST["raza"];
$finca_v = $_POST["finca_v"];


/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
$sentencia = $base_de_datos->prepare("INSERT INTO vacunos(Id_V, NomV, GenV, Fech_N, Color, Raza, Id_F) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo_v, $nombre_vacuno, $genero, $fecha_nacimiento, $color_v, $raza, $finca_v]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado === TRUE) echo "Insertado correctamente";
else echo "Algo salió mal. Por favor verifica que la tabla exista";
header("refresh: 1;vacunos.php");
			exit;


?>