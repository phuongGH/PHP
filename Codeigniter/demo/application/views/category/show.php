<?php

	echo "ID ............. TITLE.............ALIAS..............UPDATE...............DELETE<br> ";

	if(isset($category)&&count($category)>0)
	{
		foreach ($category as $key => $value) {
			echo $value['id'].
			".............. ".$value['title'].
			".............. ".$value['alias'].
			'...............<a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/category/edit/'.$value['id'].'">Update</a>
			...............<a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/category/delete/'.$value['id'].'">Delete</a> <br>';
		}
	}

	echo '<a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/category/add">add</a>';
?>