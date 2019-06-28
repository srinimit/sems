<?php
session_start();
if (empty($_SESSION['id'])){
  header('Location: /ct/staff');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script type="text/javascript">
		function typechange(){
			var edValue = document.getElementById("type");
            var type = edValue.value;
            if(type=="Academic"){
            	 $.ajax({url: "insights/academics.php",
              type: "POST",
              data: type:type,
             success: function(result,data){
                $("#place").html(result);
            },error: function() {
                alert('Error occured');
            }});
            }
           
		}
		 
	</script>

</head>
<body>
<br>
<h1><center>View Insights of DCT </center></h1>

<table>
	<tr>
		<td>
			Select batch to view insight
		</td>
		<td>
			<select>
				<option></option>
				<option>All</option>
				<option>15</option>
			</select>
	</tr>
	<tr>
		<td> View Placement / Academic Record </td>
		<td>
			<select id="type" onchange="typechange()">
				<option>Placement</option>
				<option>Academic</option>
			</select>
		</td>
	</tr>
</table>

<div id="place"></div>

</body>
</html>