<?php
include("functions.php");

echo isPar(31) == 1 ? "Es par" : "Es impar";
echo "<br>";

foreach (getArrayRandom(5, 0, 3) as $number) {
    echo $number;
    echo "<br>";
}

$numbersArray = [4, 2, 5, 6, 8, 9, 12];

echo countPairs($numbersArray);
?>