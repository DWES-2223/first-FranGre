<?php

include_once("Enterprise.php");

$hilaturasSanchis = new Enterprise( "HILATURAS SANCHIS S.L", "Carrer Pujada a Sant Cristòfol, 18, 03820 Cocentaina, Alicante" );
$hilaturasSanchis->presentation();

$fran = new Employee( "Fran", "Gregori Tandazo", 19 );
$miguel = new Employee( "Miguel", "Chamba Izquierdo", 26 );
$oliber = new Manager( "Oliber", "Dakota Quichimbo", 48 );

$hilaturasSanchis->addWorker( $fran );
$hilaturasSanchis->addWorker( $miguel );
$hilaturasSanchis->addWorker( $oliber );

$fran->setHoursWorked( 232 );
$fran->setPricePerHour( 8 );

$miguel->setHoursWorked( 232 );
$miguel->setPricePerHour( 8 );

$oliber->setSalary( 1800 );

$fran->toHTML();
$miguel->toHTML();
$oliber->toHTML();


print $hilaturasSanchis->getAllPaysheet() . " €";

print $hilaturasSanchis->toJSON();



