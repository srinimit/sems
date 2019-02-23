<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<html>
	<h1>
	 QUERY SECTION
	</h1>
	View query by
	<select id= "type" onchange = "changeType(this);" >
	<option></option>"
	<option value = 'subj'>Subject</option>
	<option value = 'grade'>Grade</option>
	</select>
	<div id = "empty">
	</div>
	<div id = "bygrade">
	</div>
	</table>
	</div>
	</div>
<script type="text/javascript">
	function changeType(element){
		var selectedValue = element.value;
		if(selectedValue == "grade"){
			$.ajax({url: "query/viewByGrade.php",
	          type: "POST",
	         success: function(result){
	         	var tb = document.getElementById("empty");
	         	tb.innerHTML = result;
	        },error: function() {
	            alert('Error occured');
	        }});

		}
		else{
			var tb = document.getElementById("empty");
			tb.innerHTML = "";
			tb = document.getElementById("bygrade");
			tb.innerHTML = "";
		}
	}

	function changeGrade(element){
		var selectedValue = element.value;
		$.ajax({url: "query/populateGrade.php",
	          data: {grade:selectedValue},
	          type: "POST",
	         success: function(result,data){
	         	var tb = document.getElementById("emptyTable");
	         	tb.innerHTML = "";
	         	var tb = document.getElementById("bygrade");
	         	tb.innerHTML = result;
	        },error: function() {
	            alert('Error occured');
	        }});
	}
	function show(reg){
			var grade = (document.getElementById("grade").value);
			var url1 = "query/gradepage.php";
			$.ajax({url: url1 ,
	          type: "POST",
	          data:{regno:reg,
	          		grade:grade
	          	},
	         	success: function(result,data){
	           	$("#tech1").html(result);

	        },error: function() {
	            alert('Error occured');
	        }});
	}

</script>
</html>