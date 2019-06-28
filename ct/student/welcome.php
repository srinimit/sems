<?php

	session_start();
	$reg = $_SESSION['regno'];
	echo "<br><br><h1>Welcome, $reg <br></h1>";
	
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql="SELECT * FROM `student` WHERE `regno`= $reg";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)){
			echo "<br><h3>Name:		".$row['name']."</h3><br>";
			echo "<h3>Graduation:	".$row['grad']."</h3><br>";
			echo "<h3>Semester:		".$row['sem']."</h3><br>";
		}
	}

?>