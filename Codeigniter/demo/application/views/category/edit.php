<form method="post" action="">
	<?php
	if(isset($category)&&count($category)>0)
	{
		echo $category['id'].'......... <input name="title" type="text" value="'.$category['title'].'" />';
		echo '......... <input name="alias" type="text" value="'.$category['alias'].'" />';
		echo "<input type='submit' value='Sửa' name='update' />";
	}
?>
</form>
