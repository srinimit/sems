<?php
	session_start();
	$reg = $_SESSION['regno'];
	$conn = mysqli_connect("localhost","root","","ctmit");
	$sql = "UPDATE `student` SET `sem`= `sem`+1 WHERE regno='$reg'";
	if(mysqli_query($conn,$sql)){
		echo "Updated Successfully";
	}
	else{
		echo "Couldnt Update";
}
?>