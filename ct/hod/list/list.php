<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
session_start();
$reg=$_SESSION['id'];
$conn = mysqli_connect("localhost","root","","ctmit");
$sql = "select * from student";
$result = mysqli_query($conn,$sql);
	echo "<h1><br><br>";
	echo " Students List";
	echo "</h1>";


	echo '<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;"><div style="overflow-y:auto; height:400px; width: 800px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';

	//echo "<div class = \"container\" style = \"margin-top: 15px; width: 850px; text-align: right;\">

	//	<div style=\"overflow-y:auto; height: 400px; width: 800px\" >
	//	<table  bgcolor=\"#ffffff\" width=\"100\" 
	//	class=\"table table-striped table-bordered table-hover table-sm\" border=1>";
	echo "<tr><th>Register Number</th><th>Student Name</th><th>Semester</th><th>Action</th></tr>";
	if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){
		echo "<tr><td>";
		echo $row['regno'];
		echo "</td><td>";
		echo $row['name'];
		echo "</td><td>";
		echo $row['sem'];
		$id=$row['regno'];
		echo "</td><td><input type='button' class=\"w3-button w3-green\" onclick=\"show($id)\" value = \"VIEW\">";
		echo "</td></tr>";
		
	}
	echo "</table></div></div>";

}
?>
<html>
<script type="text/javascript">
	function show(k){
			alert(k);
			var url1 = "list/faprofile.php";
			//window.open(url1,"_blank");
			$.ajax({url: url1 ,
	          type: "POST",
	          data:{regno:k},
	         	success: function(result,data){
	           	//my_window = window.open("");
				//my_window.document.write(result);
	            $("#tech1").html(result);

	        },error: function() {
	            alert('Error occured');
	        }});
	}
</script>
</html>