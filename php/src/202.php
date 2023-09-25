<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>PHP fácil</title>
</head>
<body>
<?php 
const nombre = "Fran";
const apellidos = "Gregori Tandazo";
const email = "frangregori61@…gmail.com";
const fechaNacimiento = "20/02/2002";
const telefono = 642603912;
?>
<table>
  <tr>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>Fecha Nacimiento</th>
    <th>Telefono</th>
  </tr>
  <tr>
    <td><?=nombre?></td>
    <td><?=apellidos?></td>
    <td><?=email?></td>
    <td><?=fechaNacimiento?></td>
    <td><?=telefono?></td>
  </tr>
</table>
</body>
</html>