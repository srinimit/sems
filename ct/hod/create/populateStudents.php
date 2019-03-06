<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE);
	$sem=$_POST['batch'];
	$conn = mysqli_connect("localhost","root","","ctmit");
	$sql="SELECT * FROM `StudentDetails` WHERE `batch_no` = $sem";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			echo "<input type = \"checkbox\" name = 'roll' value='$r[0]'> &nbsp $r[0] <br>";
		}
	}
?>