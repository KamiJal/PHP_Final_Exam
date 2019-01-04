<?php

namespace Task_04;

function SumDigitsWithFor(int $digit)
{
    if ($digit < 0)
        return -1;

    $digitLength = strlen($digit);
    $strDigit = (string)$digit;
    $sum = 0;
    for ($i = 0; $i < $digitLength; $i++) {
        $sum += $strDigit[$i];
    }

    return $sum;
}

function SumDigitsWithForEach(int $digit)
{
    if ($digit < 0)
        return -1;

    $sum = 0;
    foreach (str_split($digit) as $value) {
        $sum += $value;
    }

    return $sum;
}

