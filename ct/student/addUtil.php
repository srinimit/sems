<?php
	session_start();
	$reg=$_SESSION['regno'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "select sem from student where regno='$reg'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)){
			$curr = $row[0];
		}
	}
	$cc=$_POST['cc'];
	$cn=$_POST['cn'];
	$cr=$_POST['cr'];
	$grade=$_POST['grade'];

	$sql = "INSERT INTO `$reg`(`ccode`, `cname`, `credits`, `grade`, `sem`) VALUES ('$cc','$cn',$cr,'$grade',$curr)";

	if(mysqli_query($conn,$sql)){
				
	}
	else
	echo  mysqli_error($conn);
?>