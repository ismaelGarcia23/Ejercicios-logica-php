<?php



function generarFibonacci($n) {
    $fibonacci = [];

    if ($n >= 1) $fibonacci[] = 0;
    if ($n >= 2) $fibonacci[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

function esPrimo($numero) {
    if ($numero <= 1) return false;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }

    return true;
}

function esPalindromo($texto) {
    $texto = strtolower(preg_replace("/[^a-z0-9]/i", "", $texto));
    $reverso = strrev($texto);

    return $texto === $reverso;
}

// ----- Salida formateada -----

echo "<h3>1. Serie Fibonacci</h3>";
$fib = generarFibonacci(15);
echo "<pre>" . implode(", ", $fib) . "</pre>";

echo "<h3>2. Verificación de número primo</h3>";
$num = 1;
echo "¿$num es primo? <strong>" . (esPrimo($num) ? "Sí" : "No") . "</strong><br>";

echo "<h3>3. Verificación de palíndromo</h3>";
$frase = "Anita lava la tina";
echo "\"$frase\" es un palíndromo: <strong>" . (esPalindromo($frase) ? "Sí" : "No") . "</strong><br>";

?>




