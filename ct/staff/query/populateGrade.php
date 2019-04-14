<?php
session_start();
$reg=$_SESSION['id'];
$grade = $_POST['grade'];
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "select * from student where fa='$reg'";
echo '<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;"><div style="overflow-y:auto; height:400px; width: 800px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70"> <tr><th>Register Number</th><th>Student Name</th><th>Count</th><th>Action</th></tr>';
$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
	while($row=mysqli_fetch_array($result)){
		$reg_no = $row['regno'];
		$sql_count  = "SELECT COUNT(*) AS total FROM `$reg_no` WHERE grade = '$grade'";
		$result_count = mysqli_query($conn,$sql_count);
		$count = 0;
		while($rowCount=mysqli_fetch_array($result_count)){
			$count = $rowCount['total'];			
		}
		if($count>0){
			echo "<tr><td>";
			echo $row['regno'];
			echo "</td><td>";
			echo $row['name'];
			echo "</td><td>";
			echo $count;
			$id=$row['regno'];
			echo "</td><td><input type='button' class=\"w3-button w3-green\" onclick=\"show($id)\" value = \"VIEW\">";
			echo "</td></tr>";
		}
	}
}
?>