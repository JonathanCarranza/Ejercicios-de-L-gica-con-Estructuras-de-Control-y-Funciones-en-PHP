<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar si es un palíndromo</title>
</head>
<body>

<h1>Verificar si es un palíndromo</h1>

<form action="" method="post">
    <label for="cadena">Ingrese una cadena:</label>
    <input type="text" id="cadena" name="cadena" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php

// Función para determinar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Eliminar espacios y convertir a minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));
    // Comparar con su reverso
    return $cadena === strrev($cadena);
}

// Verificar si se envió el formulario
if(isset($_POST['verificar'])){
    $cadena = $_POST['cadena'];
    if (esPalindromo($cadena)) {
        echo "<p>'$cadena' es un palíndromo.</p>";
    } else {
        echo "<p>'$cadena' no es un palíndromo.</p>";
    }
}

?>

</body>
</html>
