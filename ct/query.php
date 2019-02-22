<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style.css">
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
			$.ajax({url: "viewByGrade.php",
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
		}
	}
	

	function changeGrade(element){
		var selectedValue = element.value;
		$.ajax({url: "populateGrade.php",
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
	function show(k){
			var grade = (document.getElementById("grade").value);
			var url1 = "gradepage.php";
			$.ajax({url: url1 ,
	          type: "POST",
	          data:{regno:k,
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