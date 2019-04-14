<?php

$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "select * from student where regno LIKE '2017%'";
$result = mysqli_query($conn,$sql);
echo "<table><tr><th>Reg number</th><th>Password</th></tr>";
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$reg = $r['regno'];
			$pass = $r['pass'];
			echo "<tr><td>".$reg."</td><td>".$pass."</td></tr>";
		}

	}
	echo "</table>";
?>