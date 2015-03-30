<?php
	$x = 10;
	$y = 8;
	
	echo $x > $y;			//true
	echo "</br>";
	
	echo $x <> $y;			//true
	echo "</br>";
	
	echo $x != $y;			//true
	echo "</br>";
	
	$y = 10;
	echo $x == $y;			//true
	echo "</br>";
	
	$y = "10";
	echo $x == $y;			//true
	echo "</br>";
	
	$y = "10";
	echo $x === $y;			//false
	echo "</br>";