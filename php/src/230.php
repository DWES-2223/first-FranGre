<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        const MIN_NUMBER = 0;
        const MAX_NUMBER = 99;
        $arrayNumbers = [];
        for ($i = 1; $i <= 50; $i++) {
            $arrayNumbers[$i - 1] = rand(MIN_NUMBER, MAX_NUMBER);
            echo "<li>" . $arrayNumbers[$i - 1] . "</li>";
        }
        ?>
    </ul>
</body>

</html>