<?php
    $edadLineaTemporal = 10;
    $edat = $_GET["edat"]??50;
    //extract($_GET);
    $actualYear = Date("Y");
    $anyoJoven = Date("Y") - $edadLineaTemporal;
    $anyoViejo = Date("Y") + $edadLineaTemporal;

    echo "Mi edad es de :" . $edat."<br/>";
    echo "$actualYear + $edadLineaTemporal tendré $anyoViejo <br/>";
    echo "$actualYear - $edadLineaTemporal tendré $anyoJoven";
