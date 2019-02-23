<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<html>
<h1>
	
	</h1>
	<?php
	echo "Check Students having:";
	echo "<select id= \"grade\" onchange = \"changeGrade(this);\" >";
	echo "<option></option>";
	echo "<option value = 'RA'>RA</option>";
	echo "<option VALUE = '#RA'>#RA</option>";
	echo "</select>";
	?>
	<div id = "emptyTable">
		<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;"><div style="overflow-y:auto; height:400px; width: 800px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
		<tr><th>Register Number</th><th>Student Name</th><th>Count</th><th>Action</th></tr>

	</div>
	</table>
	</div>
	</div>

</html>