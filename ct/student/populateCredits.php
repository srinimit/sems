<?php
	session_start();
	$ccode=$_POST['ccode'];
	$conn = mysqli_connect("localhost","root","","ctmit");
	$sql="SELECT * FROM `cbcs` WHERE `ccode`= '$ccode'";
	$result = mysqli_query($conn,$sql);
	$cname="";
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)){
			$cname=$row['credits'];
	}
	echo $cname;
	}
?>