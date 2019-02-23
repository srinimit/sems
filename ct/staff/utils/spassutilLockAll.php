<?php
session_start();
$fa=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","ctmit");
$sql = "UPDATE `student` SET `update`=0  WHERE `fa`=$fa";
if(mysqli_query($conn,$sql)){
	echo "Updated Successfully";
}
else{
	echo "Couldnt Update";
}
?>