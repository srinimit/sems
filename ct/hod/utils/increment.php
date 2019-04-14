<?php
	session_start();
	$fa=$_SESSION['id'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "UPDATE `student` SET `sem`= `sem`+1 WHERE `fa`=$fa";
	if(mysqli_query($conn,$sql)){
		echo "Updated Successfully";
	}
	else{
		echo "Couldnt Update";
}
?>