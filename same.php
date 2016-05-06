<?php
if(isset($_FILES['userImage'])===true)
{
	//echo print_r($_FILES['upload'])
	$zip = new ZipArchive();
	$zip->open("{$_POST['filename']}.zip",ZipArchive::CREATE);
	$files = $_FILES['userImage'];
	for ($i = 0;$i<count($files['name']);$i++)
	{
		$tmp = $files['tmp_name'][$i];
		$filename = $files['name'][$i];
		move_uploaded_file($tmp, $filename);
		$zip->addFile($filename);
	}
	move_uploaded_file("{$_POST['filename']}.zip","peli" );
	//ZipArchive::fbsql_set_password("mylover");
	$zip->close();
}



/*
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload[]" multiple>

<input type="submit" value="upload">
</form>*/
?>