<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["nombre"]) || !isset($_POST["apellidos"]) || !isset($_POST["sexo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "..//lib/Conexion.php";
$codigo_f = $_POST["cod_F"];
$nombre_Finca = $_POST["nom_F"];
$vereda = $_POST["nom_V"];
$depar = $_POST["depa"];
$hectareas = $_POST["hect"];



/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
$sentencia = $base_de_datos->prepare("INSERT INTO fincas(Id_F, Nom_F, Nom_Ver, Dep, Hect) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo_f, $nombre_Finca, $vereda, $depar, $hectareas]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado === TRUE) echo "Insertado correctamente";

else echo "Algo salió mal. Por favor verifica que la tabla exista";
header("refresh: 1;fincas.php");
			exit;



?>