<?php

start();

function start()
{
    $numero = 2;
    if (!is_numeric($numero)) {
        echo "Solo se admiten números";
        return;
    }

    echo "$numero es: " . handleNumber($numero);
}



function handleNumber($numero)
{
    if (isPositive($numero)) {
        return "positivo";
    }

    if (isNegative($numero)) {
        return "negativo";
    }
    return "zero";
}


function isPositive($number)
{
    return $number > 0;
}

function isNegative($number)
{
    return $number < 0;
}

function isZero($number)
{
    return $number == 0;
}