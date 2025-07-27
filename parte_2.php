<?php



function sumaPares($numeros){

    $suma = 0;

    foreach($numeros as $n){
        if($n % 2 == 0){
            $suma += $n;
        }
    }

    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "La suma de los números pares es: " . sumaPares($numeros);


function calcularCostoLlamada($clave, $minutos){

    // Tabla de precios
    $zonas = [
        12 => 2.00,
        15 => 2.20,
        18 => 4.50,
        19 => 3.50,
        23 => 6.00,
        25 => 6.00,
        29 => 5.00,
    ];

    if(!isset($zonas[$clave])){
        return "clave no valida.";
    }

    $precioMinuto = $zonas[$clave];
    $total = $precioMinuto * $minutos;

    if($minutos < 30){
        $total *= 0.9;

    }
    return number_format($total, 2);
    
}


$clave = 12;
$minutos = 20;
echo "<br>El costo de la llamada es: " . calcularCostoLlamada($clave, $minutos) . " soles.";