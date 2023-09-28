<?php
extract($_GET);
if (isset($_GET['minNumber']) && isset($_GET['maxNumber'])){
    if ($maxNumber >= $minNumber) {
        echo "Mostrar todos los números entre $minNumber y $maxNumber <br>";
        for ( $i = $minNumber; $i <= $maxNumber; $i++ ) {
            echo $i . "<br>";
        }
    }
}else
    echo "Hola";

?>