<?php
$flag = 0;
foreach(glob("*.zip") as $filename)
{
	$g=strpos($filename,$_POST['find']);
	if($g===0)
			{echo "<a href=$filename titile='DownloadLINK'> $filename";
				$flag=1;
			echo "<br>";}

}
if($flag==0)
{echo "we couldn't find the file";
echo "<br>";
}
?>
<a href="index.html">go to HOME</a>