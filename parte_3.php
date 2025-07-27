<?php

function fizzBuzz($n){
    $resultado = [];
    for($i = 1; $i <= $n; $i++){
        if($i % 3 == 0 && $i % 5 == 0 ){
            $resultado[] = "FizzBuzz";
        }elseif($i % 3 == 0){
            $resultado[] = "Fizz";
        }elseif($i % 5 == 0){
            $resultado[] = "Buzz";
        }else{
            $resultado[] = (string)$i;
        }
    }
    return $resultado;
}

$n = 10;
$res = fizzBuzz($n);
echo implode(", ", $res);