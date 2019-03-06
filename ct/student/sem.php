<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start();
$reg=$_SESSION['regno'];
$sem=$_POST['sem'];
$curr=0;
$conn = mysqli_connect("localhost", "root", "", "ctmit");
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

	echo '<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;"><div style="overflow-y:auto; height:400px; width: 800px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';
	
	echo "<tr><th>Course Code</th><th>Course Name</th><th>Credit</th><th>Grade</th></tr>";
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td align=\"left\">";
		echo $row['ccode'];
		echo "</td><td align=\"left\">";
		echo $row['cname'];
		echo "</td><td align=\"left\">";
		echo $row['credits'];
		echo "</td><td align=\"left\">";
		echo $row['grade'];
		echo "</td></tr>";
		
	}
	echo "</table></div></div>";
	echo "<br>";
	echo "<button id = '$sem' class=\"btn btn-success\">PRINT</button>";
}

}
?>