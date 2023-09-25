<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrayLetters = [];
    $fCounter = 0;
    $mCounter = 0;
    for ($i = 1; $i <= 100; $i++) {
        $binaryRandom = rand(0, 1);
        $arrayLetters[$i - 1] = "M";

        if ($binaryRandom == 1) {
            $arrayLetters[$i - 1] = "F";
        }
    }
    print_r(array_count_values($arrayLetters));
    ?>
</body>

</html>