<b>xác nhận xóa!</b>
<form method="post" action=''>
	id : <?php echo $category['id']; ?> title <?php echo $category['title']; ?><br>
	<input type="submit" name="delete" value="Xóa"/> | 
	<input type="submit" value="hủy" name="cacel" formaction="http://localhost/all-project-demo/Codeigniter/demo/index.php/category/show"/>
</form>