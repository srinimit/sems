<?php
session_start();
$reg=$_SESSION['regno'];
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT  `update` FROM `student` WHERE  regno='$reg'";
$result = mysqli_query($conn,$sql);
$curr=0;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){
		$curr = $row[0];
	}
}
if($curr==1)
echo "1";

else
echo "0";
?>
