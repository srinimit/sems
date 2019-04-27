<?php
	session_start();
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$sql = "select * from `internships`";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		
		echo $row['regno'];
		echo $row['compname'];
		
		
	}
}
	
	$sql = "select * from `placements`";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		
		echo $row['regno'];
		echo $row['compname'];
		
		
	}
}
else{
	echo "error";
}
?>