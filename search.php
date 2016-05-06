<?php
foreach(glob("*.zip") as $filename)
{
	$g=strpos($filename,$_POST['find']);
	if($g==0)

			echo "<a href=$filename titile='DownloadLINK'> $filename";
}





?>
<a href="index.html">go to HOME</a>