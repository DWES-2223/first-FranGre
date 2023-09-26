<?php
include("functions.php");

$arrayNumbers = [4, 5, 10, 8, 3, 6];

foreach ($arrayNumbers as $number) {
    echo " $number ";

}

echo "<br>";
echo "El número más grande es: " . getMaxNumber(4, 5, 10, 8, 3, 6);
echo "<br>";
echo concat("Hola", "qué", "tal");

?>