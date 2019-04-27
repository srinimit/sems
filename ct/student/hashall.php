<?php
session_start();

$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
//$enc_pass = password_hash($pass,PASSWORD_BCRYPT,array('cost'=>12));
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="SELECT * FROM `student` ";
$result = mysqli_query($conn,$sql);
$iter = 1;
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){
		$regno = $row['regno'];
		if($regno>2017503548){
			$pass = password_hash($row['pass'],PASSWORD_BCRYPT,array('cost'=>12));
		$sql = "UPDATE `student` SET `pass`='$pass'  WHERE `regno`= $regno";
		if(mysqli_query($conn,$sql)){
			$iter = $iter +1;
		}
		else{
			echo "Couldnt Update";
		}
		}
		
	}
}
else{
	echo "No Such Student";
}
echo $iter;
?>