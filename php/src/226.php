<!DOCTYPE html>
<html lang="en">
<?php
extract($_POST)
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <?php
        for ($i = 1; $i <= $numeroFilas; $i++) {
            ?>
            <tr>
                <?php
                for ($j = 1; $j <= $numeroColumnas; $j++) {
                    if ($i == 1 || $j == 1) {
                    
                    ?>
                    <th>
                        <?= $i ?><?= $j ?>
                    </th>
                    <?php
                    }

                }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>