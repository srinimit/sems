<?php
session_start();
$regno=$_POST['regno'];
//$pass=$_POST['pass'];
$enc_pass=$_POST['pass'];
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
//$enc_pass = password_hash($pass,PASSWORD_BCRYPT,array('cost'=>12));
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="SELECT * FROM `student` WHERE `regno`=$regno";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){

		$sql = "UPDATE `student` SET `pass`='$enc_pass'  WHERE `regno`= $regno";
		if(mysqli_query($conn,$sql)){
			echo "Updated Successfully";
		}
		else{
			echo "Couldnt Update";
		}
	}
}
else{
	echo "No Such Student";
}
?>