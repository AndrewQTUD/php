<?php

function output(){
    static $num = 0; //Declare as 0
    echo $num . '<br>'; //output number with a break line
    $num = $num + 5; //Adding 5  
}

output();
output();
output();