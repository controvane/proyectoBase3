<?php

        $buscar = $_POST['buscar'];

        $con = new MongoDB\Driver\Manager('mongodb://localhost:27017');

        $filtro  = ['nombre' => $buscar];
        $opciones = [];

        $query = new \MongoDB\Driver\Query($filtro, $opciones);
        $result   = $con->executeQuery('sistema.empleados', $query);
        foreach ($result as $documento) {
                echo "<tr><td>".$documento->nombre."</td><td>".$documento->correo."</td><td>".$documento->fecha."</td><td>".$documento->telefono."</td></tr>";
        }
?>

