<!DOCTYPE html>
<html lang="en">
<!-- Para recoger info por prompt y que este en el html-->
<?php
extract($_POST);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="default">

        <thead>

            <tr>

                <th>a</th>

                <th>*</th>

                <th>b</th>

                <th>=</th>

            </tr>

        </thead>

        <tbody>
            <?php
            for ($i = 1; $i < 10; $i++) {
                ?>
                <tr>
                    <td>7</td>

                    <td>*</td>

                    <td>
                        <?= $i ?>
                    </td>

                    <td>
                        <?= 7 * $i ?>
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>