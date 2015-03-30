<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/04-pagination.css">
</head>
<body>
<div class="content">
	<div class="pagination">
		<ul id="pagination-digg">
			<!--
			<li class="previous-off">«Previous</li>	
			<li class="active">1</li>
			-->
			<li class="previous"><a href="?page=2"> «Previous </a></li>	
			<li><a href="?page=1">1</a></li>
			<li><a href="?page=2">2</a></li>
			<li><a href="?page=3">3</a></li>
			<li><a href="?page=4">4</a></li>
			<li><a href="?page=5">5</a></li>
			<li><a href="?page=6">6</a></li>
			<li><a href="?page=7">7</a></li>
			<li class="next"><a href="?page=2">Next »</a></li>
		</ul>
	</div><!-- end of div pagination -->
	<?php
		$result = (isset($_GET["page"])==true)?$_GET["page"]:0;
	?>
	</br>
	</br>
	</br>
	<span class="result"> current page is <?php echo $result; ?> </span>
</div> <!-- end div content -->
</body>
</html>
