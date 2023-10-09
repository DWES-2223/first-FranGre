<?php

$frase = "Hola que tal";
var_dump($frase);

$fraseSoloImpares = [];

for ( $j = 0; $j < strlen($frase) ; $j++ ) {
    if (!isPar($j)){
        $fraseSoloImpares[] = $frase[$j];
    }
}

print join("",$fraseSoloImpares);
function isPar($number){
    return $number % 2 == 0;
}