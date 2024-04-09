<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear platillo</h1>
    <a href="index.php">Volver</a>

    <form action="procesar.php" method="POST" id="formulario">
        <label for="platillo">Ingrese nombre del platillo</label>
        <input type="text" name="platillo" id="platillo">
        <br>
        <label for="descripcion">Ingrese descripción del platillo</label>
        <input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="precio">Ingrese precio del platillo</label>
        <input type="number" name="precio" id="precio">
        <br>
        <label for="categoria">Categoría del platillo</label>
        <select name="categoria" id="categoria">
            <option value="bebestible">Bebestible</option>
            <option value="comestible">Comestible</option>
        </select>
        <br>
        <input type="submit" value="Registrar platillo">
    </form>
</body>
<script>
    let formulario = document.querySelector('#formulario');

    const ejecutaFormulario = (e) => {
        e.preventDefault();
        // Obtener valores input
        let platillo = document.querySelector('#platillo').value;
        let descripcion = document.querySelector('#descripcion').value;
        let precio = document.querySelector('#precio').value;
        let categoria = document.querySelector('#categoria').value;
        // Validar valores
        if(platillo.trim() !== '' && descripcion.trim() !== '' && precio.trim() !== '' && categoria.trim() !== '') {
            // Si todo ok -> Hacemos submit
            formulario.submit();
        } else {
            // Si algo anda mal -> Mostramos mensaje
            alert('Falta algún campo, verifique');
        }
    }

    formulario.addEventListener('submit', ejecutaFormulario);
</script>
</html>