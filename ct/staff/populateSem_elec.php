<?php
	session_start();
	$sem=$_POST['sem'];
	$conn = mysqli_connect("localhost","root","","ctmit");
	$reg=$_SESSION['regno'];
	$sqltype= "SELECT  `type` FROM `student` WHERE `regno` = '$reg'";
	$type="";
	$result = mysqli_query($conn,$sqltype);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$type = $r['type'];
		}
	}
	$sql="SELECT * FROM `$type` WHERE `sem`= $sem";
	$result = mysqli_query($conn,$sql);
	echo "<select id=\"code\" onchange=\"changeFunc_elec(this);\">";
	echo "<option></option>";
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			echo "<option value='$r[0]'> $r[0] </option>";
		}
	}
	echo "</select>";
?>