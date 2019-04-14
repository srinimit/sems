<?php  
session_start();
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
		echo "not connected";
}
$regno = $_POST["id"];
$pass = $_POST["pass"];
$sql = "select * from falist where staffid= '$regno' and pass='$pass'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$_SESSION["id"] = $regno;
	echo "<meta http-equiv=\"refresh\" content=\"0;url=sprofile.php\">";
}
else
	echo "ila";
?>

