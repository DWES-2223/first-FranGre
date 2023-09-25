<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    const maxNumber = 10;
    $total = 0;
    for ($i = 1; $i <= maxNumber; $i++) {
        echo $i;
        if ($i < maxNumber) {
            echo "+";
        }
        $total += $i;
    }
    echo " = $total"
        ?>
</body>

</html>