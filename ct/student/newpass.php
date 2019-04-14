<?php
session_start();
?>
<html>
<h2>Change password here</h2>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#btn").click(function(){
			var pass = $('input[name=passwd]').val();
			var roll = document.getElementById('roll').value;
			 $.ajax({url: "passUtil.php",
          data: {regno:roll,pass:pass},
          type: "POST",
         success: function(result,data){
            alert(result);
            window.location.href = "http://ct.mitindia.edu/ct/student/profile.php";
        },error: function() {
            alert('Error occured');
        }});
		});
		

	});
</script>
<table >
	<tr>
		<th align="left"><h3>Student roll</h3></th>
		<td height="2" align="right" width="200"><input readonly="" type="text" id="roll" value="<?php session_start(); echo $_SESSION['regno']; ?>"></td>
	</tr>
	<tr>
		<th align="left"><h3>Enter new password</h3></th>
		<td height="2" align="right">
			<input id="passwd" type  ="password" name="passwd" placeholder="Password here!">
		</td>
	</tr>
	<tr>
		<td height="2"  colspan="2" align="center"><button class="w3-button w3-ripple w3-green" id="btn" style="height:40px;width:550px">Update</button></td>
	</tr>
	<tr><td height="2"></td></tr>
	
</table>
</html>
