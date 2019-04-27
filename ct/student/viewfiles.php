<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
	session_start();
	$regno = $_SESSION['regno'];
	echo "<h1><br><br>";
	echo "View Uploaded Files";
	echo "</h1>";

	
	echo '<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;"><div style="overflow-y:auto; height:400px; width: 800px" ><table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">';
	
	echo "<tr><th>Files</th></tr>";
	
	$reg = md5($regno);
    $cwd = getcwd();
    $target_dir =  $cwd.'/upload/'.$reg;
    $split = explode("/student/",$target_dir);

// Sort in ascending order - this is default
	$dir = scandir($target_dir);
	foreach ($dir as $val){ 
		 	$file = $split[1]."/".$val;
		 	if(!(is_dir($val))){
			echo "<tr><td><a href=\"$file\" target=\"_blank\"> <p align=\"left\"> $val </p></td></tr>";
		 	}
			
	} 
	echo "</table></div></div>";
	echo "<br>";
	



?>