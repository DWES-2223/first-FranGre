<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>PHP fácil</title>
</head>
<body>
<!-- Muestra una frase con HTML -->
Hola mundo<br>
<!-- Muestra una frase con PHP -->
<?php 
$altura = 10;
$anchura = 5;

const factor = 2;

echo "àrea del rectangle és: " . $altura * $anchura * factor;
?>
</body>
</html>