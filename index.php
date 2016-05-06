<?php
require 'core.php';
require 'conn.php';

echo "<br>";
if(loggedin())
{
	include 'progress.php';
	echo 'you are logged in.<a href="logout.php">log out</a>';
	include 'same.php';
} 
else
 {
 	echo "If you are already registerd Please enter them in the boxes given below";
 	//include 'same.php';
	include 'login.php';

}

?>
<script type="text/javascript">
	function generate()
	{
		console.log("fsfsdfs");
		var name = document.getElementById("filename").value;
		var link = "localhost:5679/" + "TMP00024/" + name + ".zip" ;
		document.getElementById("file_link").innerHTML = link ;
	}
</script>


<div id = "file_link" ></div>