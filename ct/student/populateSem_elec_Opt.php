<?php
	session_start();
	$sem=$_POST['sem'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	$reg=$_SESSION['regno'];
	$sqltype= "SELECT  `type` FROM `student` WHERE `regno` = '$reg'";
	$type="";
	$result = mysqli_query($conn,$sqltype);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$type = $r['type'];
		}
	}
	$sql="SELECT * FROM `$type` WHERE `sem`= $sem";
	$result = mysqli_query($conn,$sql);
	echo "<select id=\"codeOpt\">";
	echo "<option></option>";
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			echo "<option value='$r[0]'> $r[0] </option>";
		}
	}
	echo "</select>";
?>