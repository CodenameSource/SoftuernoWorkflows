<?php

function getRandomNumber()
{
    $number = random_int(1, 100);
    return $number === 42 ? "the answer" : $number;
}