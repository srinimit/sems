<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
	ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	session_start();
	$reg  = $_POST['regno'];
	$grade = $_POST['grade'];
	$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	echo "<h1>Reg number: <b>".$reg."</b></h1>";
	$sql = "SELECT * FROM `".$reg."` WHERE `grade` = \"$grade\"";
	$result = mysqli_query($conn,$sql);
	echo "<div class=\"container\" style = \"margin-top: 15px; width: 850px; text-align: right;\"><div style=\"overflow-y:auto;height:400px; width: 800px\" ><table id=\"tb\" class=\"table table-striped table-bordered table-sm\" cellspacing=\"0\" width=\"70\"> <tr><th>Course Code</th><th>Course Name</th><th>Semester</th></tr>";
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result)){
			echo "<tr><td>";
			echo $row['ccode'];
			echo "</td><td>";
			echo $row['cname'];
			echo "</td><td>";
			echo $row['sem'];
			echo "</td></tr>";
			}		
	}
	echo '</table></div></div>';
?>