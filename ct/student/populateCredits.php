<?php
	session_start();
	$ccode=$_POST['ccode'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	$reg=$_SESSION['regno'];
	$sqltype= "SELECT  * FROM `student` WHERE `regno` = '$reg'";
	$type="";
	$grad = "";
	$result = mysqli_query($conn,$sqltype);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$type = $r['type'];
			$grad = $r['grad'];
		}
	}
	if($grad=="PG"){
		$type=$type.$grad;
	}
	$sql="SELECT * FROM `$type` WHERE `ccode`= '$ccode'";
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