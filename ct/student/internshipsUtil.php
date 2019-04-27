<?php
	session_start();
	$reg=$_SESSION['regno'];
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$designation=$_POST['designation'];
	$cn=$_POST['cn'];
	$loc=$_POST['loc'];
	$package=$_POST['package'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	
	$sql = "INSERT INTO `internships`(`regno`, `designation`, `compname`, `location`, `sdate`, `edate`, `package`) VALUES ($reg,'$designation','$cn','$loc','$sdate','$edate',$package)";
	
	if(mysqli_query($conn,$sql)){
				
	}
	else
	echo "Error occurred";
?>