<?php
    $mysqli = new mysqli("localhost", "root", "mysql", "cafephp");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    echo "<h1>Hola mundo</h1><br><hr><br>";

    $resultado = $mysqli->query("select * from contenido");
    
    while($fila = $resultado->fetch_assoc()) {
        echo $fila["titulo"];
    }
?>