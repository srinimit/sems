<?php
	session_start();
	$reg=$_SESSION['regno'];
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	
	$test=$_POST['test'];
	$score=$_POST['score'];
	
	if(($score=="")){
		$sql = "INSERT INTO `testscores`(`regno`, `test`) VALUES ($reg,'$test')";
	}else{
	$sql = "INSERT INTO `testscores`(`regno`, `test`, `score`) VALUES ($reg,'$test',$score)";
	}
	if(mysqli_query($conn,$sql)){
				
	}
	else
	echo "Error occurred";
?>