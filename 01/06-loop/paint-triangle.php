<!DOCTYPE html>

<html>

    <head>
		<title>Paint Triangle</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/06-Paint-Triangle.css" type="text/css" rel="stylesheet"></link>
	</head>
    <body>
		<?php
			$t_hight = 6;
			$t_Char = "*";
			$result = "";
			$type = "";
			if(isset($_POST["submit"]))
			{
				$type = $_POST["submit"];
			}
			
			if(isset($_POST["t_hight"])&& isset($_POST["t_Char"]) && isset($_POST["t_Char"]))
			{
				$t_Char = $_POST["t_Char"];
				if(is_numeric($_POST["t_hight"]))
				{
					$t_hight = $_POST["t_hight"];
					if($t_hight<1)
					{
						$result = "Input triangle hight must be than 1.";
					}
				}
				else
				{
					$result = $t_hight ." not a number . Input triangle hight must be a number";
				}
			}
			
		?>	
	
	
		<div class="content">
			<br/>
			<br/>
			<h1>Paint Triangle</h1>
			<form id="F1" action="paint-triangle.php" method="post">
			<div class="control">
				<div>
				Input triangle hight: <input type"text" name="t_hight" value="<?php echo $t_hight; ?>"/> <br/>
				Input a char: <input type"text" name="t_Char" value="<?php echo $t_Char; ?>"/> <br/>
				</div>	
			</div>	
			<ul>
				<li>
					<input type="submit" name="submit" class="btn1" value="1"/>	
				</li>
				<li>
					<input type="submit" name="submit" class="btn2" value="2"/>	
				</li>
				<li>
					<input type="submit" name="submit" class="btn3" value="3"/>	
				</li>
			</ul>		
			</form>
				<div class="result">

				<?php 
				
				/*
				***************************** my code *************************
					if(isset($_GET["type"]))
					{
						$type = $_GET["type"];
					}
					$i=0;
					if($type == 1)
					{
						$i=0;
						while($i<$t_hight)
						{
							for($j=0;$j<=$i;$j++)
							{
								echo($t_Char);
							}
							echo('<br/>');
							$i++;
						}
					}
					if($type == 2)
					{
						$i=$t_hight;
						while($i>0)
						{
							for($j=0;$j<$i;$j++)
							{
								echo($t_Char);
							}
							echo('<br/>');
							$i--;
						}
					}
					if($type == 3)
					{
						$i=0;
						$wmax = $t_hight*2;
						while($i<$t_hight)
						{
							$l_min = $t_hight - $i;
							$l_max = $t_hight + $i;
							for($j=0;$j<$wmax;$j++)
							{
								if($j>=$l_min && $j<=$l_max)
								{
									echo $t_Char;
								}else
								{
									echo '&nbsp;';
									echo '&nbsp;';
								}
							}
							echo('<br/>');
							$i++;
						}
					}
				*/
				switch($type)
				{
					case '1':
						$i=0;
						while($i<=$t_hight)
						{
							$result .= str_repeat($t_Char,$i) . '<br/>';
							$i++;
						}
					break;
					case '2':
						$i=$t_hight;
						while($i>0)
						{
							$result .= str_repeat($t_Char,$i) . '<br/>';
							$i--;
						}
					break;
					case '3':
						$i=1;
						while($i<=$t_hight)
						{
							$space = str_repeat(" &nbsp;",$t_hight - $i) ;
							$char = str_repeat($t_Char,$i*2-1);
							$result .= $space. $char . '<br/>';
							$i++;
						}
					break;
				}
				echo $result;
				?>
				</div> <!-- end of div result -->
		</div><!--end of div content -->
    </body>

</html>