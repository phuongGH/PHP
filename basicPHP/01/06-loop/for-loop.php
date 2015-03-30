<!DOCTYPE html>

<html>

    <head>
		<title>For loop</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="../css/06-for-loop.css" type="text/css" rel="stylesheet"></link>
	</head>
    <body>
		<div class="content">
			<br/>
			<br/>
			<h1>For loop</h1>
			<ul>
				<?php 
					for($i = 0; $i < 21; $i++)
					{
						echo"<li>I will search google before asking dumb questions.</li>";
					}
				
				?>
			</ul>
		</div>
    </body>

</html>