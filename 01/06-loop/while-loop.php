<!DOCTYPE html>

<html>

    <head>
		<title>While loop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/06-for-loop.css" type="text/css" rel="stylesheet"></link>
	</head>
    <body>
		<div class="content">
			<br/>
			<br/>
			<h1>While loop</h1>
			<ul>
				<?php 
					$i=0;
					while($i < 21)
					{
						echo"<li>I will search google before asking dumb questions.</li>";
						$i++;
					}
				
				?>
			</ul>
		</div>
    </body>

</html>