<?php $mysqli = new mysqli("localhost", "root", "mysql", "cafephp"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Café KANELA</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../CSS/estilo.css">
	<link rel="stylesheet" href="../CSS/mediaqueries.css">
</head>
<body>
	<?php include 'imports/header.php' ?>

	<section class="main">
		<?php include 'imports/content.php' ?>
	</section>

	<?php include 'imports/footer.php' ?>
</body>
<script src="../jquery.min.js"></script> <!-- Se debe incluir jquery para poder usar sus funciones en el archivo js -->
<script src="../JAVASCRIPT/funciones.js"></script>
<script src="../JAVASCRIPT/parallax.js"></script>
</html>
<?php $mysqli->close(); ?>