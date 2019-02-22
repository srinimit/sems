<?php
session_start();
$reg=$_SESSION['regno'];
$conn = mysqli_connect("localhost","root","","ctmit");
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
