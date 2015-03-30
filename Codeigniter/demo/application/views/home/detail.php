<style type="text/css">
	table tr th{
		background-color: #505A60;
		color: #FC2A2A;
		font-weight: bold;
	}
	table tr td{
		background-color: #D6D6D6;
		min-width: 100px;
		padding: 4px 20px;
		line-height: 24px;
	}
</style>

<table >
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Add</th>
			<th>Delete</th>
			<th>Update</th>
			<th>Detail</th>
		</tr>
		<tr>
			<td><input type="text" value="<?php echo $category['id']; ?>"></input></td>
			<td><input type="text" value="<?php echo $category['title']; ?>"></input></td>
			<td><a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/home/update">update</a></td>
			<td><a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/home/add">add</a></td>
			<td><a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/home/delete">delete</a></td>
			<td><a href="http://localhost/all-project-demo/Codeigniter/demo/index.php/home/detail">detail</a></td>
		</tr>
</table>
