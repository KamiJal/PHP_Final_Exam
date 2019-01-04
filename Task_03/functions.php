<?php

function CountLettersInWordWithFor(string $target, string $word)
{
    if (strlen($target) > 1)
        return -1;

    $count = 0;
    $wordLength = strlen($word);
    for ($i = 0; $i < $wordLength; $i++) {
        if ($word[$i] === $target) {
            $count++;
        }
    }

    return $count;
}

function CountLettersInWordWithForEach(string $target, string $word)
{
    if (strlen($target) > 1)
        return -1;

    $count = 0;
    foreach (str_split($word) as $letter) {
        if ($letter === $target) {
            $count++;
        }
    }

    return $count;
}