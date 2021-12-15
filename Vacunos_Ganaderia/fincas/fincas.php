<!doctype html>
<html lang="es">



  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">


    <title>Ganaderia</title>
  </head>
  <body background="..//img/fondo.jpg">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!------------------------------------------------------------------------------------------>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg" style= "background-color:#a085466b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><font  color="#E1E1D7"><h5><i>Gestion de Vacunos</i></h5></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link active" href="../vacunos/vacunos.php"><font  color="#E1E1D7"><h5><i>Registro de Vacunos</i></h5></font></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!------>
<div class="bd-masthead mb-3" id="content">
  <div class="container px-4 px-md-3">
<!----------->
<br>


<div class="card mt-4" style= "background-color:#5646226b;">
              <div class="card-header">

              <font  color="#E1E1D7"><h2><i>Registro de Fincas</i></h2></font>
              <br>
<form method="post" action="insertar_fincas.php">
  

<div class="col mb-4">
    <label name=cod_F for="cod_F" class="form-label"><font  color="#E1E1D7"><h6><i>Codigo de la Finca</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="cod_F" class="form-control" id="cod_F" >
  </div> 
</div>


<div class="col mb-4">
    <label name="nom_v" for="nom_F" class="form-label"><font  color="#E1E1D7"><h6><i>Nombre de la Finca</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="nom_F" class="form-control" id="nom_F">
  </div> 
</div>

<div class="col mb-4">
    <label name="nom_V" for="nom_V" class="form-label"><font  color="#E1E1D7"><h6><i>Nombre de la Vereda</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="nom_V" class="form-control" id="nom_V">
  </div> 
</div>






<div class="col-md-4 ">
    <label for="inputState" class="form-label "><font  color="#E1E1D7"><h6><i>Seleccione un Departamento</i></h6></font></label>
    <select id="inputState" name="depa" class="form-select">
      
      <option disabled="" selected="">DEPARTAMENTO</option>  
                            <option value="AMAZONAS">AMAZONAS</option>
                            <option value="ANTIOQUIA">ANTIOQUÍA</option>
                            <option value="ARAUCA">ARAUCA</option>
                            <option value="ATLANTICO">ATLÁNTICO</option>
                            <option value="BOLIVAR">BOLÍVAR</option>
                            <option value="BOYACA">BOYACÁ</option>
                            <option value="CALDAS">CALDAS</option>
                            <option value="CAQUETA">CAQUETÁ</option>
                            <option value="CASANARE">CASANARE</option>
                            <option value="CAUCA">CAUCA</option>
                            <option value="CESAR">CESAR</option>
                            <option value="CHOCO">CHOCÓ</option>
                            <option value="CORDOBA">CORDOBA</option>
                            <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                            <option value="GUAINIA">GUAINIA</option>
                            <option value="GUAVIARE">GUAVIARE</option>
                            <option value="HUILA">HUILA</option>
                            <option value="LA GUAJIRA">LA GUAJIRA</option>
                            <option value="MAGDALENA">MAGDALENA</option>
                            <option value="META">META</option>
                            <option value="NARIÑO">NARIÑO</option>
                            <option value="NORTE DE SANTANDER">NORTE DE SANTADER</option>
                            <option value="PUTUMAYO">PUTUMAYO</option>
                            <option value="QUINDIO">QUINDÍO</option>
                            <option value="RISARALDA">RISARALDA</option>
                            <option value="SAN ANDRES Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                            <option value="SANTANDER">SANTADER</option>
                            <option value="SUCRE">SUCRE</option>
                            <option value="TOLIMA">TOLIMA</option>
                            <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                            <option value="VAUPES">VAUPÉS</option>
                            <option value="VICHADA">VICHADA</option>
      
    </select>
</div>
<br>
 




<div class="col mb-4">
    <label name="finca_v" for="finca_v" class="form-label"><font  color="#E1E1D7"><h6><i>Extensión de Hectareas</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="hect" class="form-control" id="finca_v">
  </div> 
</div>




  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<br>
<br>


<div class="container">
  <div class="abs-center">
<table class="table table-striped table-success">
		<thead>
			<tr>
				<th>Codigo Finca</th>
				<th>Nombre Finca</th>
				<th>Vereda</th>
				<th>Departamento</th>
        <th>Hectareas</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
<?php
include '..//lib/conexion2.php';
$stmt = $dbh->prepare("SELECT * FROM fincas");
// Especificamos el fetch mode antes de llamar a fetch()
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmt->execute();
// Mostramos los resultados
while ($row = $stmt->fetch()){
	echo "<tr>
	<td>".$row["Id_F"]."</td>
    <td>".$row["Nom_F"]."</td>
	 <td>".$row["Nom_Ver"]."</td>
	<td>".$row["Dep"]."</td>
  <td>".$row["Hect"]."</td>
	<td><a href='actualizar.php?id=".$row['Id_F']."' class='btn btn-primary'>Actualizar</a></td>
	<td><a href='eliminar.php?id=".$row['Id_F']."' class='btn btn-danger'>Eliminar</a></td>
	</tr>";
}
?>

</tbody>
	</table>
<br><br>





</div>
 </div>






 







<!----------->
  </div>
</div>
  </body>
</html>