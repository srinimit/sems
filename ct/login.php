<?php  
session_start();
$conn = mysqli_connect("localhost","root","","ctmit");
if(!$conn){
		echo "not connected";
}
$regno = $_POST["regno"];
$pass = $_POST["pass"];
$sql = "select * from student where regno= '$regno' and pass='$pass'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$_SESSION["regno"] = $regno;
	echo "<meta http-equiv=\"refresh\" content=\"0;url=profile.php\">";
}
else
	echo "<script type='text/javascript'>alert('Username not found')</script>";
?>

