<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar si un número es primo</title>
</head>
<body>

<h1>Verificar si un número es primo</h1>

<form action="" method="post">
    <label for="numero">Ingrese un número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="verificar">Verificar</button>
</form>

<?php

// Función para determinar si un número es primo
function esPrimo($numero) {
    // 1 no es primo
    if ($numero <= 1) {
        return false;
    }
    
    // Comprobar divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // No es primo
        }
    }
    
    return true; // Es primo
}

// Verificar si se envió el formulario
if(isset($_POST['verificar'])){
    $numero = $_POST['numero'];
    if (esPrimo($numero)) {
        echo "<p>$numero es un número primo.</p>";
    } else {
        echo "<p>$numero no es un número primo.</p>";
    }
}

?>

</body>
</html>
