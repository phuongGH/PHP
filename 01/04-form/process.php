<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/04-StyleSheets.css">
</head>
<body>
<div class="content">

	<!-- get,Post method -->
	<?php 
		//use for get method
		/*
		echo $_GET["email"]; 
		echo "</br>";
		echo $_GET["password"]; 
		*/
		
		//use for get method
		/*
		echo $_POST["email"]; 
		echo "</br>";
		echo $_POST["password"]; 
		*/
		
		//use for get and post method
		/*
		echo $_REQUEST["email"]; 
		echo "</br>";
		echo $_REQUEST["password"]; 
		*/
		
	?> <!-- end get,Post method -->
	
	
	<!-- login control -->
	<?PHP
		$email = $_POST["email"]; 
		$password = $_POST["password"]; 
		
		$result = ($email == "abc" && $password=="123")?  "Login succeeded!" :  "Login failed!" ;
		echo $result;
	?> <!-- end of login control -->
	
	
</div> <!-- end div content -->
</body>
</html>
