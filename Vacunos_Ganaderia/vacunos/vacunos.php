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
  <body background="..//img/fondo5.jpg">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!------------------------------------------------------------------------------------------>


<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg" style= "background-color:#a8b1886b;">
  <div class="container-fluid">
  <a class="navbar-brand" href="../index.php"><font  color="#E1E1D7"><h5><i>Gestion de Vacunos</i></h5></font></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../fincas/fincas.php"><font  color="#E1E1D7"><h5><i>Registro de Fincas</i></h5></font></a>
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

              <font  color="#E1E1D7"><h2><i>Registrar Vacuno</i></h2></font>
              <br>
<form method="post" action="insertar_vacuno.php">
  

<div class="col mb-4">
    <label name=cod_v for="cod_v" class="form-label"><font  color="#E1E1D7"><h6><i>Codigo del Vacuno</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="cod_v" class="form-control" id="cod_v" >
  </div> 
</div>


<div class="col mb-4">
    <label name="nom_v" for="nom_v" class="form-label"><font  color="#E1E1D7"><h6><i>Nombre del Vacuno</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="nom_v" class="form-control" id="nom_v">
  </div> 
</div>


<div class="col-md-4">
    <label for="inputState" class="form-label" name="gen_v"><font  color="#E1E1D7"><h6><i>Genero</i></h6></font></label>
    <select id="gen_v" name="gen_v" class="form-select">
      <option selected>Elegir</option>
      <option value="Macho">Macho</option>
      <option value="Hembra">Hembra</option>
      
    </select>
</div>
<br>




  
  <div class="row mb-3">
    <label  for="exampleInputPassword1" class="form-label"><font  color="#E1E1D7"><h6><i>Fecha Nacimiento</i></h6></font></label>
    <div class="col-sm-4">
    <input type="date" name="fecha_n" class="form-control" id="fecha_n">
  </div>
  </div>


  <div class="col-md-4">
    <label for="inputState" class="form-label"><font  color="#E1E1D7"><h6><i>Color del Vacuno</i></h6></font></label>
    <select id="inputState" name="color" class="form-select">
      <option selected>Elegir</option>
      <option value="Blanco">Blanco</option>
      <option value="Gris">Gris</option>
      <option value="Mayoría blanco combinado con negro">Mayoría blanco combinado con negro</option>
      <option value="Mayoría negro combinado con blanco">Mayoría negro combinado con blanco</option>
      <option value="Mayoría rojo combinado con blanco">Mayoría rojo combinado con blanco</option>
      
      
    </select>
</div>
<br>
  

<div class="col-md-4 ">
    <label for="inputState" class="form-label "><font  color="#E1E1D7"><h6><i>Raza del Vacuno</i></h6></font></label>
    <select id="inputState" name="raza" class="form-select">
      <option selected>Elegir</option>
      <option value="Normando">Normando</option>
      <option value="Brahma">Brahma</option>
      <option value="Angus">Angus</option>
      
    </select>
</div>
<br>
 




<div class="col mb-4">
    <label name="finca_v" for="finca_v" class="form-label"><font  color="#E1E1D7"><h6><i>Codigo de Finca</i></h6></font></label>
    <div class="col-sm-4">
    <input  type="text" name="finca_v" class="form-control" id="finca_v">
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
				<th>Codigo Vacuno</th>
				<th>Nombre Vacuno</th>
				<th>Genero</th>
				<th>Fecha Nacimiento</th>
        <th>Color</th>
        <th>Raza</th>
        <th>Codigo Finca</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
<?php
include '..//lib/conexion2.php';
$stmt = $dbh->prepare("SELECT * FROM vacunos");
// Especificamos el fetch mode antes de llamar a fetch()
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// Ejecutamos
$stmt->execute();
// Mostramos los resultados
while ($row = $stmt->fetch()){
	echo "<tr>
	<td>".$row["Id_V"]."</td>
    <td>".$row["NomV"]."</td>
	 <td>".$row["GenV"]."</td>
	<td>".$row["Fech_N"]."</td>
  <td>".$row["Color"]."</td>
  <td>".$row["Raza"]."</td>
  <td>".$row["Id_F"]."</td>
	<td><a href='actualizar.php?id=".$row['Id_V']."' class='btn btn-primary'>Actualizar</a></td>
	<td><a href='eliminar.php?id=".$row['Id_V']."' class='btn btn-danger'>Eliminar</a></td>
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