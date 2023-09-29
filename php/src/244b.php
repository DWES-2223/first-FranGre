<!DOCTYPE html>
<html lang="en">
<?php
extract( $_POST );
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
    </tr>
    <?php
    for ( $i = 1; $i <= count( $nombreProducto ); $i++ ) {
        ?>
        <tr>
            <td><?= $nombreProducto[$i - 1] ?></td>
            <td><?= $precioProducto[$i - 1] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
