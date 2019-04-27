     
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	         
	<script>
		function edValueKeyPress() {
		var edValue = document.getElementById("edValue");
		var reg = edValue.value;
		
		$.ajax({url: "nodueUtil.php",
		      data: {regno:reg},
		      type: "POST",
		      
		    success: function(result,data){
		     	$("#student").html(result);
		     	
		    },error: function() {
		        alert('Error occured');
		    }});
}     
	</script>
</head>
<body>


<table id = "tb">
	<tr>
		<td colspan="2"><H1><center>Check No Due</center></H1></td>
	</tr>
	<tr>
		<td><h3> Student Roll</h3> </td>
		<td><input type="text" onInput="edValueKeyPress()" id  = "edValue"></td>

	</tr>
	<tr>
		<td colspan="2"><div id="student">
			<div class="container" style = "margin-top: 15px;height: 650px;width: 1150px; text-align: right;">
				<div style="overflow-y:auto; height: 600px; width: 1100px">
				</div>
			</div>

		</div></td>
	</tr>
</table>
<br>


</body>
</html>