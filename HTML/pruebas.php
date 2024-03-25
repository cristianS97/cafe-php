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

    echo "<br><hr><br>";

    $categorias = $mysqli->query("select distinct categoria as categoria from menu");

    while($row = $categorias->fetch_assoc()):
        echo "<h2>Categoría: " . $row['categoria'] . "</h2><br>";

        $platillos = $mysqli->query("select * from menu where categoria = '" . $row['categoria'] . "'");
        while($platillo = $platillos->fetch_assoc()):
            echo "<p>" . $platillo['platillo'] . "</p>";
        endwhile;
    endwhile;
?>