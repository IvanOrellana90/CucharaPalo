<?php

function randomColor() 
{
    $input = array("info", "primary", "warning", "light");
    return $input[array_rand($input,1)];
}