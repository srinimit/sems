<?php
session_start();
$regno=$_POST['regno'];
$pass=$_POST['pass'];
$fa=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","ctmit");
$sql="SELECT * FROM `student` WHERE `regno`=$regno";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){
			if($row['fa']==$fa){
						$sql = "UPDATE `student` SET `pass`='$pass'  WHERE `regno`=$regno";
						if(mysqli_query($conn,$sql)){
							echo "Updated Successfully";
						}
						else{
							echo "Couldnt Update";
						}
		
			}else{
				echo "Unauthorized";
			}
	}
}
else{
	echo "No Such Student";
}
?>