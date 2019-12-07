<?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];
        $telefono = $_POST['telefono'];

        $documento = [
                'nombre' => $nombre,
                'correo' => $correo,
                'fecha' => $fecha,
                'telefono' => $telefono
                ];

        $con = new MongoDB\Driver\Manager('mongodb://localhost:27017');

        $bulk = new MongoDB\Driver\BulkWrite;

        $bulk->insert($documento);
        $result = $con->executeBulkWrite('sistema.empleados', $bulk);
        header('Location: http://localhost/index.php');
?>

