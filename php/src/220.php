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
        const maxNumber = 50;

        for ($i = 0; $i <= maxNumber; $i++) {
            if ($i % 2 == 0) {
                echo "<li>" . $i . "<li>";
            }
        }
        ?>
    </ul>
</body>

</html>