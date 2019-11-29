<?php

function staticVar(){
	static $num = 0; //Declare static variable.
	echo $num . '<br>'; //outputting variable, added line break for neatness.
	$num = $num + 5; // updating the static variable by 5 each time it is called.
}

staticVar();
staticVar();
staticVar();