<?php
include_once "Empleado.php";

$fran = new Empleado( "Fran", "Gregori Tandazo", 1600, null );

$fran->addMobilePhone( 642603912 );

print $fran->getFullName();
print "<br>";
print $fran->listMobilePhones();
$fran->addMobilePhone( 642648952 );
print "<br>";
print $fran->listMobilePhones();
