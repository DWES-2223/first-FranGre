<?php
function isPar(float $num1): bool
{
    return $num1 % 2 == 0;
}

function getArrayRandom(int $size, int $mimNumber, int $maxNumber): array
{
    $arrayNumbers = [];
    for ($i = 1; $i <= $size; $i++) {
        $arrayNumbers[$i - 1] = rand($mimNumber, $maxNumber);
    }
    return $arrayNumbers;
}

function countPairs($numbers): int
{
    $pairCounter = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            ++$pairCounter;
        }
    }
    return $pairCounter;
}

function getMaxNumber(...$numbers): int
{
    $maxNumber = PHP_MINOR_VERSION;
    foreach ($numbers as $number) {
        if ($number >= $maxNumber) {
            $maxNumber = $number;
        }
    }
    return $maxNumber;
}

function concat(...$texts)
{
    $concatenatedText = "";
    foreach ($texts as $text) {
        $concatenatedText .= " " . $text;
    }
    return $concatenatedText;
}

function digitos(int $num)
{
    return strlen(strval($num));
}

function digitosN(int $num, int $pos)
{
    for ($i = 0; $i < strlen(strval($num)); $i++) {
        if ($pos == $i) {
            return strval($num)[$i];
        }
    }
}
?>