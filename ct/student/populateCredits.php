<?php
	session_start();
	$ccode=$_POST['ccode'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql="SELECT * FROM `cbcs` WHERE `ccode`= '$ccode'";
	$result = mysqli_query($conn,$sql);
	$cname="";
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)){
			$cname=$row['credits'];
	}
	echo $cname;
	}
?>