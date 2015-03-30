<?php
	$var = "PHP";
	$result = (is_string($var)==1)?"Is string.":"Is not string";
	echo $result;
	echo"</br>";
	
	
	$n = 0;
	$result = ($n > 0)?"positive.": (($n < 0)?"negative":0);
	echo $result;