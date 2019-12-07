<?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];
        $telefono = $_POST['telefono'];

	//echo $nombre."<br>";
	//echo $correro."<br>";
	//echo $fecha."<br>";
	//echo $telefono."<br>";

        $con = new MongoDB\Driver\Manager('mongodb://localhost:27017');

        $bulk = new MongoDB\Driver\BulkWrite;

        $bulk->update(
		['nombre' => $nombre],
		['$set' => [
			'correo'=> $correo,
			'fecha' => $fecha,
			'telefono' => $telefono
			]
		],['multi' => false, 'upsert' => false]);
        $result = $con->executeBulkWrite('sistema.empleados', $bulk);
?>

