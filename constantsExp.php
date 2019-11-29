<?php

	function declare_Constants(){
		//Defining constants
		  define("Andrew", "is currently");
		  define("Age", 22);
		  define("Sentence", "years of age");
	}
	
	function output(){
		declare_Constants();
		echo 'Andrew', '<br>';
		echo Andrew, '<br>';
		echo Age, '<br>';
		echo Sentence, '<br>';
	}
	
	output();