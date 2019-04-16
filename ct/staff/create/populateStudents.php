<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE);
	$sem=$_POST['batch'];
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		$sql="SELECT * FROM `StudentDetails` WHERE `batch_no` = $sem and `created` = 0";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			echo "<input type = \"checkbox\" name = 'roll' value='$r[0]'> &nbsp $r[0] <br>";
		}
	}
?>