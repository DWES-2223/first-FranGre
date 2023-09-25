<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $personasArray = [
        "J" => "1.72",
        "Fran" => "1.80",
        "Andreu" => "1.81"
    ];

    foreach ($personasArray as $nombre => $altura) {
        echo "Nombre: $nombre   Altura: $altura";
        echo "<br>";
    }
    ?>
</body>

</html>