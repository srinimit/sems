<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
	session_start();
	$reg = $_SESSION['regno'];
	$servername = "mysql.ct.mitindia.edu";
	$username = "ctalumni_chair";
	$password = "mitctalumni2019";
	$dbname = "ctalumni";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	echo "<h1>";
	echo "Job/Higher Studies details";
	echo "</h1>";

	$sql="SELECT * FROM `internships` WHERE `regno` = '$reg'";
	$result = mysqli_query($conn,$sql);

	echo '<div class="container" style = "margin-top: 15px;height: 650px;width: 1150px; text-align: right;"><div style="overflow-y:auto; height: 600px; width: 1100px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';
	echo "<center><h1>";
	echo "Internship details";
	echo "</h1></center>";
	echo "<tr><th>Designation</th><th>Company</th><th>Company Location</th><th>Start Date</th><th>End Date</th><th>Package</th></tr>";
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td align=\"left\">";
		echo $row['designation'];
		echo "</td><td align=\"left\">";
		echo $row['compname'];
		echo "</td><td align=\"left\">";
		echo $row['location'];
		echo "</td><td align=\"left\">";
		echo $row['sdate'];
		echo "</td><td align=\"left\">";
		echo $row['edate'];
		echo "</td><td align=\"left\">";
		echo $row['package'];
		echo "</td></tr>";
		
	}
}
	echo "</table>";

	echo '<table id="tbplace" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';
	echo "<center><h1>";
	echo "Placement details";
	echo "</h1></center>";
	echo "<tr><th>Designation</th><th>Company</th><th>Company Location</th><th>Package</th></tr>";
	$sql="SELECT * FROM `placements` WHERE `regno` = '$reg'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td align=\"left\">";
		echo $row['designation'];
		echo "</td><td align=\"left\">";
		echo $row['compname'];
		echo "</td><td align=\"left\">";
		echo $row['location'];
		echo "</td><td align=\"left\">";
		echo $row['package'];
		echo "</td></tr>";
		
		}
	}
	echo "</table>";

	echo '<table id="tbscores" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';
	echo "<center><h1>";
	echo "Test Scores details";
	echo "</h1></center>";
	echo "<tr><th>Test Name</th><th>Scores</th></tr>";
	$sql="SELECT * FROM `testscores` WHERE `regno` = '$reg'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td align=\"left\">";
		echo $row['test'];
		echo "</td><td align=\"left\">";
		echo $row['score'];
		echo "</td></tr>";
		
		}
	}
	echo "</table>";



	echo "</div></div>";
	
	


?>