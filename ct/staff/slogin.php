<?php  
session_start();
$conn = mysqli_connect("localhost","root","","ctmit");
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

