<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrayNumbers = [];
    for ($i = 1; $i <= 5; $i++) {
        $arrayNumbers[$i - 1] = rand(0, 99);
        echo $arrayNumbers[$i - 1];
        echo "<br>";
    }
    echo "El numero más grande es " . max(($arrayNumbers));
    echo "<br>";
    echo "El numero más pequeño es " . min(($arrayNumbers));
    echo "<br>";
    $a = array_filter($arrayNumbers);
    $average = array_sum($a) / count($a);
    echo $average;
    echo "La media es " . (($average));
    ?>
</body>

</html>