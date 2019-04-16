<?php
session_start();
ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$staff=$_SESSION['id'];
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$reg=$_POST['reg'];
$pass = $_POST['pass'];
$sem= 1;
$update = 0;
$type = $_POST['type'];
$sqlname = "SELECT * FROM `StudentDetails` WHERE `reg_no` = '$reg'";
$mailID= "";
$name = "";
$result = mysqli_query($conn,$sqlname);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$name = $r['name'];
			$mailID = $r['email'];
		}
	}
$sql1="CREATE TABLE `$reg`( `ccode` VARCHAR(100) NOT NULL , `cname` VARCHAR(100) NOT NULL , `credits` INT NOT NULL , `grade` VARCHAR(50) NOT NULL , `sem` INT NOT NULL, PRIMARY KEY(ccode,sem) )";

$sql2="INSERT INTO `student`(`regno`, `name`,`type`, `pass`, `sem`, `update`, `fa`) VALUES ('$reg','$name','$type','$pass','$sem','$update','$staff')";

$sql3= "UPDATE `StudentDetails` SET `created`= 1 WHERE `reg_no` = '$reg'";
echo $sql1;
echo $sql2;
if(mysqli_query($conn,$sql1)&&mysqli_query($conn,$sql2)&&mysqli_query($conn,$sql3)){
        //echo("Error description: " . mysqli_error($conn));
}
//echo "Succ";
?>