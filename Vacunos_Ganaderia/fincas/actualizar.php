<?php

require_once '..//lib/conexion2.php';

	
	$OK = true;
	$msg = '';
	if (isset($_GET['id'])) {
		$sql = 'SELECT * FROM fincas WHERE Id_F = ?';
		$stmt = $dbh->prepare($sql);
		$results = $stmt->execute(array($_GET['id']));
		$row = $stmt->fetch();
		if (empty($row)) {
			$result = "No se encontraron resultados !!";
		}
	}
	if (array_key_exists('update', $_POST)) {
		$sql = 'UPDATE fincas SET Nom_F = ?, Nom_Ver = ?, Dep = ?, Hect = ? WHERE Id_F = ?';
		$stmt = $dbh->prepare($sql);
		$OK = $stmt->execute(array($_POST['nom_f'],$_POST['ver'],$_POST['depa'],$_POST['hecta'],$_GET['id']));
		$error = $stmt->errorInfo();
		if (!$OK) {
			echo $error[2];
		} else {
			echo '<p>El registro se actualizo correctamente</p>';
			header("refresh: 1;fincas.php");
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
	    				<td><label for="cedula">Codigo Finca:</label></td>
	    				<td><input type="text" name="cod_f" id="cedula"/ disabled="disabled" value="<?php echo $row['Id_F'];?>"></td>
	    			</tr>
	    			<tr>
		    			<td><label for="nombre">Nombre Finca:</label></td>
		    			<td><input type="text" name="nom_f" id="nombre"/ value="<?php echo $row['Nom_F'];?>"></td>
	    			</tr>
	    			<tr>
	    				<td><label for="direccion">Vereda:</label></td>
	    				<td><input type="text" name="ver" id="direccion" value="<?php echo $row['Nom_Ver'];?>"/></td>
	    			</tr>
	    			<tr>
		    			<td><label for="telefono">Departamento:</label></td>
		    			<td><input type="text" name="depa" id="telefono" value="<?php echo $row['Dep'];?>"/></td>
	    			</tr>
					<tr>
		    			<td><label for="telefono">Hectareas:</label></td>
		    			<td><input type="text" name="hecta" id="telefono" value="<?php echo $row['Hect'];?>"/></td>
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
