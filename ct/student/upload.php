<!DOCTYPE html>
<html>

	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<center><h1>DOC UPLOAD SECTION</h1></center>
<form action="mk.php" method="post" enctype="multipart/form-data">
	<table class="table table-striped table-bordered table-sm"> 
		<tr>
			<td colspan="2">
    Select Files to upload:</td>
		</tr>
		<tr>
			<td>
				<input type="file" name="fileToUpload[]" id="fileToUpload" multiple>
			</td>
			<td>
				<input type="submit" value="Upload Files" name="submit">
			</td>
		</tr>
	</table>
</form>

</body>
</html>