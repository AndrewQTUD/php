<?php
$x = 'TooManyHanas';
$y = 'is a person';

	function websiteName(){
		global $x, $y;
		echo $x, ' ', $y;
	}
	
	websiteName();