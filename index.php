<?php
//creamos la conexión con mongoDB
$con = new MongoDB\Driver\Manager('mongodb://localhost:27017');

//creamos variable auxiliares que usaremos más adelante para las consultas
$filtro  = [];
$opciones = [];

//creamos un objeto de tipo consulta con las variables auxiliares
$query = new \MongoDB\Driver\Query($filtro, $opciones);

//ejecutamos la consulta hacia mongoDB para la base de datos ejemplo y la coleccion usuarios
$result   = $con->executeQuery('ejemplo.usuarios', $query);

//mostramos los resultados en la pagina recien creada
foreach ($result as $documento) {
  echo $documento->nombre."  ".$documento->apellido."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <title>MongoDB</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<script src="javascript.js" type="text/javascript"></script>
	<script src="jquery.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">
<div class="row">
            <div class="col-md-3 col-xs-1 col-lg-3"></div>
            <div class="col-md-6 col-xs-10 col-lg-6">
<form action="guardar.php" method="POST" >
<div class="form-group">
<label for="nombre">*Nombre:</label>
<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required />
</div>
<div class="form-group">
<label class="" for="correo">*Correo Electrónico:</label>
<input class="form-control" type="email" name="correo" id="correo" placeholder="Email" required />
</div>
<div class="form-group">
<label for="fecha" >*Fecha de Nacimiento:</label>
<input type="date" name="fecha" id="fecha" class="form-control" required />
</div>
                    <div class="form-group">
<label for="tel">*Teléfono:</label>
<input type="tel" name="telefono" id="telefono" class="form-control" required />
</div>
<input type="submit" value="Enviar" class="btn bg-primary text-white" />

<input type="button" id="btn-modificar" name="btn_modificar" value="Modificar" class="btn bg-primary text-white" />

<div class="form-group">
<label for="buscar">Buscar:</label>
<input type="search" name="buscar" id="buscar" class="form-control" placeholder="Nombre a buscar" />
</div>
<input type="button" value="Buscar" id="btn-buscar" class="btn bg-primary text-white" />

<div class="form-group">
<label for="eliminar">Eliminar:</label>
<input type="search" name="eliminar" id="eliminar" class="form-control" placeholder="Nombre a eliminar" />
</div>
<input type="button" value="Eliminar" id="btn-eliminar" class="btn bg-primary text-white" />
</form>

</div>
<div class="col-md-3 col-xs-1 col-lg-3"></div>
        </div>
    </div>
    <br><br>
        <div class="row">
            <div class="col-md-3 col-xs-1 col-lg-3"></div>
            <div class="col-md-6 col-xs-10 col-lg-6">
<table class="table table-hover">
<thead>
<tr><td>Nombre</td><td>Correo Electronico</td><td>Fecha de Nacimiento</td><td>Telefono</td></tr>
</thead>
<tbody id="datos">
<!-- Codigo PHP va aqui -->

<?php
$con = new MongoDB\Driver\Manager('mongodb://localhost:27017');

$filtro  = [];
$opciones = [];

$query = new \MongoDB\Driver\Query($filtro, $opciones);
$result   = $con->executeQuery('sistema.empleados', $query);
foreach ($result as $documento) {
echo "<tr><td>".$documento->nombre."</td><td>".$documento->correo."</td><td>".$documento->fecha."</td><td>".$documento->telefono."</td></tr>";
}
?>







</tbody>
</table>
            </div>
<div class="col-md-3 col-xs-1 col-lg-3"></div>
        </div>
</body>
</html>
