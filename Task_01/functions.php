<?php

namespace Task_01;

function ShowTextUsingLoopWithFor(string $text)
{
    $textLength = strlen($text);
    for ($i = 0; $i < $textLength; $i++) {
        echo $text[$i];
    }
}

function ShowTextUsingLoopWithForEach(string $text)
{
    foreach (str_split($text) as $letter) {
        echo $letter;
    }
}

