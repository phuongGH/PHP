<?php
	$x =2;
	$y = $x + 2; 
	echo $y;
	echo "</br>";
	
	$x = 9;
	$y = $x % 2;
	echo "9%2 = ".$y; 
	echo "</br>";
	
	$x *= 5;
	echo "x *= 5 : " . $x;
	echo "</br>";
	
	$x++;
	echo "x++ : " . $x;
	echo "</br>";
	
	++$x;
	echo "++x : " . $x;
	echo "</br>";
	
	$x=10;
	$y = $x++;
	echo "x =10,  y = x++ :" . $y;		//10
	echo "</br>";
	
	$x=10;
	$y = ++$x;
	echo "x =10,  y = ++x :" . $y;		//11
	echo "</br>";