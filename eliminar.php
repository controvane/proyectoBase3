<?php

        $eliminar = $_POST['eliminar'];

        $con = new MongoDB\Driver\Manager('mongodb://localhost:27017');
	$bulk = new MongoDB\Driver\Bulkwrite;

	$bulk->delete(['nombre'=>$eliminar]);
        //$filtro  = delete(['nombre' => $eliminar]);
        //$opciones = [];

        //$query = new \MongoDB\Driver\Query($filtro, $opciones);
        $result   = $con->executeBulkWrite('sistema.empleados', $bulk);
        
        echo "<tr>Se borro el registro<td>";
        
?>

