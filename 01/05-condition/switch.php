<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/05-switch.css">
</head>
<body>
<!-- javascript -->
<script type="text/javascript">
function showMessage(msg)
{
	alert(msg);
}
</script> 
<!-- end of javascript -->

<?php
	$num1 = 0;
	$num2 = 0;
	$operator = "";
	$result = "";
	if(isset($_POST["number1"]) && isset($_POST["operator"]) && isset($_POST["number2"]))
	{
		$num1 = $_POST["number1"];
		$num2 = $_POST["number2"];
		$operator = $_POST["operator"];
	}

	if(is_numeric($num1)&&is_numeric($num2))
	{
		switch($operator)
		{
			case "plus":
				$result = $num1 ." plus " . $num2 ." equal ". ($num1 + $num2);
			break;
			case "minus":
			$result = $num1 ." minus " . $num2 ." equal ". ($num1 - $num2);
			break;
			case "multiply":
			$result = $num1 ." multiply " . $num2 ." equal ". ($num1 * $num2);
			break;
			case "divide":
			$result = $num1 ." divide " . $num2 ." equal ". ($num1 / $num2);
			break;
			default:
			$result = "";
			break;
		}
	}
	else{
		if(!is_numeric($num1))
		{
			?>
			<script type="text/javascript">
				this.showMessage("<?php echo $num1 . " is not number!"; ?>");
			</script>
			<?php
		}
		else{
			?>
			<script type="text/javascript">
				this.showMessage("<?php echo $num2 . " is not number!"; ?>");
			</script>
			<?php
		}
	}
?>
		
	
<div class="content">
	<form name="main-form" method="post" action="#">
		Number 1: 
		<input type="text" name="number1" value="<?php echo $num1 ?>"/> <br/>
		Operator :
		<select name="operator">
		  <option value="plus">+</option>
		  <option value="minus">-</option>
		  <option value="multiply">*</option>
		  <option value="divide">/</option>
		</select> 
		<br/>
		Number 2: 
		<input type="text" name="number2"  value="<?php echo $num2 ?>"/> <br/>
		
		<input type="submit" name="submit" value="Result" />
		<br/>
		<span>Result <?php echo $result ?> </span>
	</form>
</div> <!-- end div content -->


</body>
</html>