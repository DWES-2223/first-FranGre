<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
extract($_POST)
?>
<table>
  <tr>
    <th>Nombre</th>
    <th>Apellidos 1</th>
    <th>Apellidos 2</th>
    <th>Email</th>
    <th>Fecha Nacimiento</th>
    <th>Telefono</th>
  </tr>
  <tr>
    <td><?=$nom?></td>
    <td><?=$cognom1?></td>
    <td><?=$cognom2?></td>
    <td><?=$email?></td>
    <td><?=$any?></td>
    <td><?=$telefon?></td>
  </tr>
</table>
</body>
</html>

