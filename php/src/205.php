<?php
$billetes = [0, 0, 0, 0, 0, 0, 0];
//$dinero = $_GET["dinero"];
$dinero = 139;
$idBillete100 = 0;
$idBillete50 = 1;
$idBillete20 = 2;
$idBillete10 = 3;
$idBillete5 = 4;
$idMoneda2 = 5;
$idMoneda1 = 6;
$resto;


echo "Billetes de 100 ->" . intdiv($dinero, 100) . "<br>";
// si es intdiv es mas grande o igual que 1 haces la resta si no nope
// asi con todos

if (intdiv($dinero, 100) >= 1) {
    $dinero -= 100;
}
echo $dinero % 100 . "<br>";

echo "Billetes de 50 ->" . intdiv($dinero, 50) . "<br>";
if (intdiv($dinero, 50) >= 1) {
    $dinero -= 50;
}
echo $dinero % 50 . "<br>";

echo "Billetes de 20 ->" . intdiv($dinero, 20) . "<br>";
if (intdiv($dinero, 20) >= 1) {
    $dinero -= 20;
}
echo $dinero % 20 . "<br>";

echo "Billetes de 10 ->" . intdiv($dinero, 10) . "<br>";
if (intdiv($dinero, 10) >= 1) {
    $dinero -= 10;
}
echo $dinero % 10 . "<br>";

echo "Billetes de 5 ->" . intdiv($dinero, 5) . "<br>";
if (intdiv($dinero, 5) >= 1) {
    $dinero -= 5;
}
echo $dinero % 5 . "<br>";

echo "Monedas de 2 ->" . intdiv($dinero, 2) . "<br>";
if (intdiv($dinero, 2) >= 1) {
    $dinero -= 2;
}
echo $dinero % 2 . "<br>";

echo "tengo en la cuenta " . $dinero . "$ <br>";

echo "Monedas de 1 ->" . intdiv($dinero, 1) . "<br>";
if (intdiv($dinero, 1) >= 1) {
    $dinero -= 1;
}
echo $dinero % 1 . "<br>";