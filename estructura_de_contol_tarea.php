<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea estructura de control</title>
</head>
<body>

<h1>Generar Serie Fibonacci</h1>
<form action="" method="post">
    <label for="fibonacci">Ingrese el número de términos de la serie Fibonacci:</label>
    <input type="number" id="fibonacci" name="fibonacci" min="1" required>
    <button type="submit" name="generarFibonacci">Generar Serie</button>
</form>

<?php

// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    $fibonacci = array();
    
    // Casos base
    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }
    
    // Generar los siguientes términos
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    return $fibonacci;
}

if(isset($_POST['generarFibonacci'])){
    $n = $_POST['fibonacci'];
    $fibonacci = generarFibonacci($n);
    echo "<p>Los primeros $n términos de la serie Fibonacci son: " . implode(', ', $fibonacci) . "</p>";
}
?>

</body>
</html>