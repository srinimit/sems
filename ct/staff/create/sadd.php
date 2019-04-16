<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
<html>
<h1>Add Students under your List</h1>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
	$(document).ready(function () {

		$("#addbtn").click(function(){
			
			$("input:checkbox[name=roll]:checked").each(function() {
			       var reg = $(this).val();
			       var type = document.getElementById("type").value;
			       var pass = Math.random().toString(36).slice(-8);		
			       $.ajax({url: "create/saddUtil.php",
				          type: "POST",
				          data:{
				          	reg:reg,
				          	type:type,
				          	pass:pass
				          },
				         success: function(result,data){
				         //	alert(result);
				        },error: function(result) {
				          //  alert(result);
				        }});	
			  });
			alert("Successfully created Accounts");
			//document.getElementById("return").innerHTML ="<meta http-equiv=\"refresh\" content=\"0;url=sprofile.php\">";
			
    });	
});

</script>

<div class="container" style = "margin-top: 15px; width: 850px; text-align: right;">
<div style="overflow-y:auto; height: 400px; width: 800px" >

	<table id="tb" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
		<tr>
			<th>Batch</th>
			<th>Regulation</th>
			<th>Students roll</th>
		</tr>
		<tr>
			<td>
				<input id  = "edValue" type="text" onInput="edValueKeyPress()"/>
			</td>
			<td><select id="type">
				<option></option>
				<option value="cbcs">CBCS</option>
				<option value="rusa">RUSA</option>

			</select></td>
			<td>Enter the batch number to see the students</td>		
		</tr>
</table>
</div>
<div id="return"></div>
</div>
<CENTER><button id="addbtn"> Submit</button></CENTER>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script> 
function edValueKeyPress() {
    var edValue = document.getElementById("edValue");
    var batch = edValue.value;
    $.ajax({url: "create/populateStudents.php",
          data: {batch:batch},
          type: "POST",
          async:false,
         success: function(result,data){
         	var tb = document.getElementById("tb");
         	tb.rows[1].cells[2].innerHTML = result;
         	
        },error: function() {
            alert('Error occured');
        }});
}     
</script>
</html>