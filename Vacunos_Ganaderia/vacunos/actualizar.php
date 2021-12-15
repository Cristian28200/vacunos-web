<?php

require_once '..//lib/conexion2.php';

	
	$OK = true;
	$msg = '';
	if (isset($_GET['id'])) {
		$sql = 'SELECT * FROM vacunos WHERE Id_V = ?';
		$stmt = $dbh->prepare($sql);
		$results = $stmt->execute(array($_GET['id']));
		$row = $stmt->fetch();
		if (empty($row)) {
			$result = "No se encontraron resultados !!";
		}
	}
	if (array_key_exists('update', $_POST)) {
		$sql = 'UPDATE vacunos SET NomV = ?, GenV = ?, Fech_N = ?, Color = ?, Raza = ?, Id_F = ? WHERE Id_V = ?';
		$stmt = $dbh->prepare($sql);
		$OK = $stmt->execute(array($_POST['nom_v'],$_POST['gen'],$_POST['fecha'],$_POST['color'],$_POST['raza'],$_POST['fin'],$_GET['id']));
		$error = $stmt->errorInfo();
		if (!$OK) {
			echo $error[2];
		} else {
			echo '<p>El registro se actualizo correctamente</p>';
			header("refresh: 1;Vacunos.php");
			exit;
		}
	}
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
    	
	</head>
	<?php
		if(!$OK) :
			echo "";
		else :
	?>
		<fieldset style="width:480px" 	>
    		<legend>Editar</legend>
	    	<form action="" method="post">
	    		<table>
	    			<tr>
	    				<td><label for="cedula">Codigo Vacuno:</label></td>
	    				<td><input type="text" name="cod_v" id="cedula"/ disabled="disabled" value="<?php echo $row['Id_V'];?>"></td>
	    			</tr>
	    			<tr>
		    			<td><label for="nombre">Nombre Vacuno:</label></td>
		    			<td><input type="text" name="nom_v" id="nombre"/ value="<?php echo $row['NomV'];?>"></td>
	    			</tr>
	    			<tr>
	    				<td><label for="direccion">Genero:</label></td>
	    				<td><input type="text" name="gen" id="direccion" value="<?php echo $row['GenV'];?>"/></td>
	    			</tr>
	    			<tr>
		    			<td><label for="telefono">Fecha de Nacimiento:</label></td>
		    			<td><input type="text" name="fecha" id="telefono" value="<?php echo $row['Fech_N'];?>"/></td>
	    			</tr>
					<tr>
		    			<td><label for="telefono">Color:</label></td>
		    			<td><input type="text" name="color" id="telefono" value="<?php echo $row['Color'];?>"/></td>
	    			</tr>
					<tr>
		    			<td><label for="telefono">Raza:</label></td>
		    			<td><input type="text" name="raza" id="telefono" value="<?php echo $row['Raza'];?>"/></td>
	    			</tr>
					<tr>
		    			<td><label for="telefono">Codigo Finca:</label></td>
		    			<td><input type="text" name="fin" id="telefono" value="<?php echo $row['Id_F'];?>"/></td>
	    			</tr>
	    			<tr>
		    			<td><input type="submit" name="update" value="Actualizar"/></td>
		    			
		    		</tr>
	    		</table>
	    	</form>
    	</fieldset>
 
    	
    <?php endif;?>
    <body>
</html>
