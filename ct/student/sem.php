<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>

<?php
session_start();
$reg=$_SESSION['regno'];
$sem=$_POST['sem'];
$curr=0;
$conn = mysqli_connect("localhost","root","","ctmit");
$sql = "select sem from student where regno='$reg'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){
		$curr = $row[0];
	}
}
if($sem>=$curr){
	echo "<h1><br><br>";
	echo "You havent attended this semester";
	echo "</h1>";
}
else{
	echo "<h1><br><br>";
	echo "Academic Performance - Semester $sem";
	echo "</h1>";

	$sql="SELECT * FROM `$reg` WHERE `sem`= $sem";
	$result = mysqli_query($conn,$sql);
	echo "<div class = \"\" style = \"margin-top: 15px; width: 850px; text-align: right;\">

		<div style=\"overflow-y:auto; height: 400px; width: 800px\" >
		<table  bgcolor=\"#ffffff\" width=\"100\" 
		class=\"table table-striped table-bordered table-hover table-sm\" border=1>";
	echo "<tr><th>Course Code</th><th>Course Name</th><th>Credit</th><th>Grade</th></tr>";
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td>";
		echo $row['ccode'];
		echo "</td><td>";
		echo $row['cname'];
		echo "</td><td>";
		echo $row['credits'];
		echo "</td><td>";
		echo $row['grade'];
		echo "</td></tr>";
		
	}
	echo "</table></div></div>";
	echo "<button id = '$sem' class=\"btn btn-success\">PRINT</button>";
}

}
?>