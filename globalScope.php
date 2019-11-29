<?php

//Declare variable
$number = 10;
echo $number;

function num(){
    echo $number; //Calling this will produce a stack error
    echo 'Producing a stack error';
    echo ' ' ;
    $txt = 'Number is undefined in this funtion';
    echo $txt;
}

num(); //Calling the funtion