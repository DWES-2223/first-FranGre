<?php

const edadMinima = 1;
const bebeEdadTope = 3;
const xiquetEdadTope = 12;
const adolescenteEdadTope = 17;
const adultoEdadTope = 66;

start();

function start()
{
    $edad = 67;
    if (!is_numeric($edad)) {
        echo "Solo se admiten números superiores a " . edadMinima;
        return;
    }
    echo handleAge($edad);
}

function handleAge($number)
{
    $text = "";
    if (isBebe($number)) {
        $text = "Es un bebe";
    } else if (isXiquet($number)) {
        $text = "Es un xiquillo";
    } else if (isAdolescente($number)) {
        $text = "Es un adolescente";
    } else if (isAdulto($number)) {
        $text = "Es un adulto";
    } else {
        $text = "Es un jubileta";
    }

    return $text . " de $number";
}

function isBebe($number)
{
    return $number < bebeEdadTope;
}

function isXiquet($number)
{
    return $number <= xiquetEdadTope;
}

function isAdolescente($number)
{
    return $number <= adolescenteEdadTope;
}

function isAdulto($number)
{
    return $number <= adultoEdadTope;
}