<?php

const minValidSize = 1;
const maxValidSize = 2;

const hour = 23;
const minutes = 59;
const second = 59;

const secondsToAdd = 1;

const formatTime = "H:m:s";

start();

function start()
{
    if (!isValidHour(hour)) {
        echo "Hora inválida, debe estar entre 0  y 23";
        return;
    }

    if (!isValidMinute(minutes)) {
        echo "Minutos inválidos, debe estar entre 0  y 59";
        return;
    }

    if (!isValidSecond(second)) {
        echo "Segundos inválidos, debe estar entre 0  y 59";
        return;
    }

    $date = date(hour . ":" . minutes . ":" . second);
    echo $date . "<br>";

    echo "Fecha nueva sumando " . secondsToAdd . " segundo <br>";

    $timeAddedSeconds = handleDate(hour, minutes, second);

    echo "Fecha nueva $timeAddedSeconds <br>";

}

function handleDate($hour, $minutes, $seconds)
{
    $date = date("Y-m-d H:i:s", (strtotime(date($hour . ":" . $minutes . ":" . $seconds)) + secondsToAdd));
    $dt = new DateTime($date);
    return $dt->format('H:i:s');
}



function isValidHour($number)
{
    return isValidSize($number) && isValidRange($number, 0, 23);
}

function isValidMinute($number)
{
    return isValidSize($number) && isValidRange($number, 0, 59);
}

function isValidSecond($number)
{
    return isValidSize($number) && isValidRange($number, 0, 59);
}

function isValidSize($number)
{
    return strlen((string) $number) >= minValidSize || strlen((string) $number) <= maxValidSize;
}

function isValidRange($number, $min, $max)
{
    return $number >= $min && $number <= $max;
}