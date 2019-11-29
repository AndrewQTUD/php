<?php

	$x = 'TooManyHanas';
	$y = 'is a person.';
	
		function webName(){
			echo $GLOBALS['x'], ' ', $GLOBALS['y'];
			echo '<br>';
			echo 'This was output by an array.';
		}
	webName();	