<?php
    $resultado = $mysqli->query("select * from contenido");

    while($fila = $resultado->fetch_assoc()) {
        $titulo = $fila["titulo"];
        $contenido = $fila["bajada"];
        $acerca = $fila["acerca"];
    }
?>
<header>
    <div class="contenedor">
        <nav class="menu">
            <a href="#" id="btnAcercaDe">Acerca de</a>
            <a href="#" id="btnMenu">Menu</a>
            <a href="#" id="btnGaleria">Galeria</a>
            <a href="#" id="btnUbicacion">Ubicacion</a>
            <a href="./crearPlatillo.php" id="btnCrearPlatillo">Crear platillo</a>
        </nav>

        <div class="textos">
            <h1 class="nombre"><?= $titulo; ?></h1>
            <h3><?= $contenido; ?></h3>
        </div>
    </div>
</header>