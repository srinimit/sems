<?php
session_start();
?>
<html>
<h2>Change students password here</h2>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#btn").click(function(){
		var roll = document.getElementById('roll').value;
		var pass = document.getElementById('pass').value;
		
			 $.ajax({url: "spassutil.php",
          data: {regno:roll,pass:pass},
          type: "POST",
         success: function(result,data){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});
		$("#btn1").click(function(){

		var roll = document.getElementById('roll1').value;
		$.ajax({url: "spassutilOpen.php",
          data: {regno:roll},
          type: "POST",
         success: function(result,data){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});
		$("#btn2").click(function(){

		$.ajax({url: "spassutilOpenAll.php",
          type: "POST",
         success: function(result){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});
		$("#btn3").click(function(){

		var roll = document.getElementById('roll1').value;
		$.ajax({url: "spassutilLock.php",
          data: {regno:roll},
          type: "POST",
         success: function(result,data){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});
		$("#btn4").click(function(){

		$.ajax({url: "spassutilLockAll.php",
          type: "POST",
         success: function(result){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});
		$("#btn5").click(function(){

		$.ajax({url: "increment.php",
          type: "POST",
         success: function(result){
            alert(result);
        },error: function() {
            alert('Error occured');
        }});
		});

	});
</script>
<table >
	<tr>
		<th align="left"><h3>Enter Student roll</h3></th>
		<td height="2" align="right" width="200"><input type="text" id="roll"></td>
	</tr>
	<tr>
		<th align="left"><h3>Enter new password</h3></th>
		<td height="2" align="right"><input type="text" id="pass"></td>
	</tr>
	<tr>
		<td height="2"  colspan="2" align="center"><button class="w3-button w3-ripple w3-green" id="btn" style="height:40px;width:550px">Update</button></td>
	</tr>
	<tr><td height="2"></td></tr>
	<tr>
		<td height="2" colspan="2"> <h2><center>Open Subject Update</center></h2></td>
	</tr>
	<tr>
		<th align="left"><h3>Enter Student roll</h3></th>
		<td height="2" align="right" width="200"><input type="text" id="roll1"></td>
		<td height="2"><button id="btn1" class="w3-button w3-ripple w3-green" style="height:30px;width:80px">Open</button></td>
	</tr>
	<tr>
		<td height="2"  colspan="2" align="center"><button class="w3-button w3-ripple w3-green" id="btn2" style="height:40px;width:550px">Open All</button></td>
	</tr>
	<tr>
		<td height="2" colspan="2"> <h2><center>Lock Subject Update</center></h2></td>
	</tr>
	<tr>
		<th align="left"><h3>Enter Student roll</h3></th>
		<td height="2" align="right" width="200"><input type="text" id="roll1"></td>
		<td height="2"><button id="btn3" class="w3-button w3-ripple w3-red" style="height:30px;width:80px">Lock</button></td>
	</tr>
	<tr>
		<td height="2"  colspan="2" align="center"><button class="w3-button w3-ripple w3-red" id="btn4" style="height:40px;width:550px">Lock All</button></td>
	</tr>
	<tr>
		<td height="2"  colspan="2" align="center"><center><h2>Increment Semester</h2></center></button></td>
	</tr>
	<tr>
		<td height="2"    colspan="2" align="center"><button class="w3-button w3-ripple w3-green" id="btn5" style="height:40px;width:550px">Increment</button></td>
	</tr>
</table>
</html>
