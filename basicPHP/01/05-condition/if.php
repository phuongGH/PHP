<?php
$num = -12;
$n = $num%2;

if($n  == 0)
{
	echo "even";
}
else
{
	echo "odd";
}

echo "<br/>";
echo "<br/>";

//$result = ($n ==0)? "even": "odd";
//echo $result;
//echo "<br/>";
//echo "<br/>";

if($num>0 &&  $n  == 0)
{
	echo "positive, even";
}
else
	if($num>0 &&  $n  == 1)
	{
		echo "positive, odd";
	}
	else
		if($num<0 &&  $n  == 0)
		{
			echo "negative, even";
		}
		else
		{
			echo "negative, odd";
		}

echo "<br/>";
echo "<br/>";

$resultF = ($n >0)? "positive": "negative";
$resultL = ($n ==0)? "even": "odd";

$result = $resultF . ", " . $resultL;
echo $result;

echo "<br/>";
echo "<br/>";