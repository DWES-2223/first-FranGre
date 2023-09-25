<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $personas = [
        ["nombre" => "Jorge", "altura" => "1.75", "email" => "jjlosantos7@gmail.com"],
        ["nombre" => "Fran", "altura" => "1.80", "email" => "frangregori61@gmail.com"],
        ["nombre" => "Andre", "altura" => "1.81", "email" => "andreu@gmail.com"],
    ];

    foreach ($personas as $personaInfo => $persona) {
        foreach ($persona as $key => $value) {
            echo "$key $value ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>