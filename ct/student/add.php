<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
      <link rel="stylesheet" href="../css/style.css">
   </head>
   <body>
      <html>
         <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
         
         <script>
            $(document).ready(function () {
            
            		$.ajax({url: "checkupdate.php",
            			          type: "POST",
            			   
            			         success: function(result){
            			         	if(result=='0')
            			            	$("#tech").html("<br><br><br><br><h1>Updates functionality is locked</h1>");
            			        },error: function() {
            			            alert('Error occured');
            			        }});	
            	$("#addbtn").click(function(){
            		var ans=0;
            		var rowCount = $("#tb_ra td").closest("tr").length;
            		var tb = document.getElementById("tb_ra");
            		for(var i=1;i<=rowCount;i++){
              			var cc = tb.rows[i].cells[1].children[0].value;
              			var cn = tb.rows[i].cells[2].children[0].value;
              			var cr = tb.rows[i].cells[3].children[0].value;
              			var grade = tb.rows[i].cells[4].children[0].value;
              			$.ajax({url: "addUtil.php",
              			          type: "POST",
              			          data:{
              			          	cc:cc,cn:cn,cr:cr,grade:grade
              			          },
              			         success: function(result,data){
              			         	
              			        },error: function() {
              			            alert('Error occured');
              			        }});	
            		}
            		var rowCount = $("#tb_elec td").closest("tr").length;
            		var tb = document.getElementById("tb_elec");
            		for(var i=1;i<=rowCount;i++){
            			var cc = tb.rows[i].cells[1].children[0].value;
            			var cn = tb.rows[i].cells[2].children[0].value;
            			var cr = tb.rows[i].cells[3].children[0].value;
            			var grade = tb.rows[i].cells[4].children[0].value;
            			$.ajax({url: "addUtil.php",
            			          type: "POST",
            			          data:{
            			          	cc:cc,cn:cn,cr:cr,grade:grade
            			          },
            			         success: function(result,data){
            			         	
            			        },error: function() {
            			            alert('Error occured');
            			        }});	
            		}
                var rowCount = $("#tb_core td").closest("tr").length;
                var tb = document.getElementById("tb_core");
                for(var i=1;i<=rowCount;i++){
                  var cc = tb.rows[i].cells[0].children[0].value;
                  var cn = tb.rows[i].cells[1].children[0].value;
                  var cr = tb.rows[i].cells[2].children[0].value;
                  var grade = tb.rows[i].cells[3].children[0].value;
                  $.ajax({url: "addUtil.php",
                            type: "POST",
                            data:{
                              cc:cc,cn:cn,cr:cr,grade:grade
                            },
                           success: function(result,data){
                            
                          },error: function() {
                              alert('Error occured');
                          }});  
                }
                setTimeout(function()
                {
                  alert("Successfully Updated");

                }, 2000);
            		
            		$.ajax({url: "incrementSem.php",
            			          type: "POST",
            			         success: function(result,data){
            			         	
            			        },error: function() {
            			            alert('Error occured');
            			        }});	
                
            		$("#tech").html("<meta http-equiv=\"refresh\" content=\";url=profile.php\">");
            		
               }
               );	
            
            //  $('#dtBasicExample').DataTable();
            // $('.dataTables_length').addClass('bs-select');
            });
            
         </script>
         <H1>
            <center>Current Sem:<div id="semid"><?php
                  $reg=$_SESSION['regno'];
                  $servername = "mysql.ct.mitindia.edu";
                  $username = "ctalumni_chair";
                  $password = "mitctalumni2019";
                  $dbname = "ctalumni";

                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  $sql = "select sem from student where regno='$reg'";
                  $result = mysqli_query($conn,$sql);
                  
                  if(mysqli_num_rows($result)>0)
                  {
                  	while($row=mysqli_fetch_array($result)){
                  		$curr = $row[0];
                  	}
                  }
                  echo $curr;
                  ?>
              </div>
            </center>
         </H1>
         <div class="container" style = "margin-top: 15px; height: 650px;width: 1050px; text-align: right;">
            <div style="overflow-y:auto; height: 500px; width: 1000px" >
               <H1>
                  <center>Core Subjects</center>
               </H1>
               <table id="tb_core" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                     
                     <th>Course code</th>
                     <th>Course name</th>
                     <th>Credits</th>
                     <th>Grade</th>
                     <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore_core" title="Add More Subjects">
                        <i class="fa fa-plus" style="font-size:36px"></i>
                        </a>
                     </th>
                  </tr>
                  <tr>
                     
                     <td>
                        <select id="coursecodes" onchange="changeFunc_core(this);"></select>
                     </td>
                     <td><input type="text" readonly  style = "width:250px;overflow:hidden;" id= "coursename"></td>
                     <td><input type="text"  id = "credits" readonly></td>
                     <td>
                        <select>
                           <option></option>
                           <option id = "O">O</option>
                           <option id = "A+">A+</option>
                           <option id = "A">A</option>
                           <option id = "B+">B+</option>
                           <option id = "B">B</option>
                           <option id = "RA">RA</option>
                           <option id = "SA">SA</option>
                           <option id = "#RA">#RA</option>
                        </select>
                     </td>
                     <td><a href='javascript:void(0);'  class='remove'><i class="fa fa-minus" style="font-size:36px"></i>
                        </a>
                     </td>
                  </tr>
               </table>
                              <H1>
                  <center>RA Subjects</center>
               </H1>
               <table id="tb_ra" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                     <th>Semester</th>
                     <th>Course code</th>
                     <th>Course name</th>
                     <th>Credits</th>
                     <th>Grade</th>
                     <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore_ra" title="Add More Subjects">
                        <i class="fa fa-plus" style="font-size:36px"></i>
                        </a>
                     </th>
                  </tr>
                  <tr>
                     <td>
                        <select onchange = "changeSem(this);">
                           <option></option>
                           <option id=1>1</option>
                           <option id=2>2</option>
                           <option id=2>3</option>
                           <option id=2>4</option>
                           <option id=2>5</option>
                           <option id=2>6</option>
                           <option id=2>7</option>
                           <option id=2>8</option>

                        </select>
                     </td>
                     <td>
                        <select></select>
                     </td>
                     <td><input type="text" readonly  style = "width:250px;overflow:hidden;" id= "coursename"></td>
                     <td><input type="text"  id = "credits" readonly></td>
                     <td>
                        <select>
                           <option></option>
                           <option id = "O">O</option>
                           <option id = "A+">A+</option>
                           <option id = "A">A</option>
                           <option id = "B+">B+</option>
                           <option id = "B">B</option>
                           <option id = "RA">RA</option>
                           <option id = "SA">SA</option>
                           <option id = "#RA">#RA</option>
                        </select>
                     </td>
                     <td><a href='javascript:void(0);'  class='remove'><i class="fa fa-minus" style="font-size:36px"></i>
                        </a>
                     </td>
                  </tr>
               </table>
               <H1>
                  <center>Elective Subjects</center>
               </H1>
               <table id="tb_elec" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                     <th>Type</th>
                     <th>Course code</th>
                     <th>Course name</th>
                     <th>Credits</th>
                     <th>Grade</th>
                     <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore_elec" title="Add More Subjects">
                        <i class="fa fa-plus" style="font-size:36px"></i>
                        </a>
                     </th>
                  </tr>
                  <tr>
                     <td>
                        <select id="type" onchange="changeType(this);">
                           <option></option>
                           <option id="professional">Professional</option>
                           <option id = "Others">others</option>
                        </select>
                     </td>
                     <td>
                        <select></select>
                     </td>
                     <td><input type="text" readonly id= "coursename"  style = "width:250px;overflow:hidden;"></td>
                     <td><input type="text" id = "credits" readonly></td>
                     <td>
                        <select>
                           <option></option>
                           <option id = "O">O</option>
                           <option id = "A+">A+</option>
                           <option id = "A">A</option>
                           <option id = "B+">B+</option>
                           <option id = "B">B</option>
                           <option id = "RA">RA</option>
                           <option id = "SA">SA</option>
                           <option id = "#RA">#RA</option>
                        </select>
                     </td>
                     <td><a href='javascript:void(0);'  class='remove'><i class="fa fa-minus" style="font-size:36px"></i>
                        </a>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
         <CENTER><button id="addbtn"> Submit</button></CENTER>
         <script type="text/javascript">
            function changeSem(element) {
              	var selectedValue = element.value;
              	$.ajax({url: "populateSem.php",
                     data: {sem:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_ra");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = result;
                      tb.rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML = "<input readonly type=\"text\" id= \"coursename\"/>";
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML = "<input readonly type=\"text\" id= \"credits\"/>";

                   },error: function() {
                       alert('Error occured');
                   }});
              }
            
            function changeType(element) {
              	var selectedValue = element.value;
              	if(selectedValue == "others"){
              		var tb = document.getElementById("tb_elec");
              		tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = "<input type=\"text\"/>";
              		tb.rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML = "<input type=\"text\" id= \"coursename\"/>";
              		tb.rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML = "<input type=\"text\" id= \"credits\"/>";
              	}
                else if(selectedValue == "Professional"){
              		$.ajax({url: "populateSem_elec.php",
                     data: {sem:0},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_elec");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = result;
                    	
                   },error: function() {
                       alert('Error occured');
                   }});
              	}
                else{
                  var tb = document.getElementById("tb_elec");
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = "<input readonly type=\"text\"/>";
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML = "<input readonly type=\"text\" id= \"coursename\"/>";
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML = "<input readonly type=\"text\" id= \"credits\"/>";

                }
              }
              
              function changeSem_elec(element) {
              	
              	var selectedValue = element.value;
              	$.ajax({url: "populateSem_elec.php",
                     data: {sem:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_elec");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = result;
                    	
                   },error: function() {
                       alert('Error occured');
                   }});
              }

              function changeFunc(element) {
                var selectedValue = element.value;
              	$.ajax({url: "populate.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_ra");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[2].children[0].value = result;
                   },error: function() {
                       alert('Error occured');
                   }});
              	$.ajax({url: "populateCredits.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_ra");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[3].children[0].value = result;
                    	
                   },error: function() {
                       alert('Error occured');
                   }});
              }
              
              function changeFunc_elec(element) {
              	var selectedValue = element.value;
              	$.ajax({url: "populate.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_elec");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[2].children[0].value = result;
                    	
                   },error: function() {
                       alert('Error occured');
                   }});
              	$.ajax({url: "populateCredits.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_elec");
                    	tb.rows[element.parentNode.parentNode.rowIndex].cells[3].children[0].value = result;
                    	
                   },error: function() {
                       alert('Error occured');
                   }});
              }
              
         </script>
         <script type="text/javascript">
           function changeFunc_core(element) {
               var selectedValue = element.value;
                $.ajax({url: "populate.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                      var tb = document.getElementById("tb_core");
                      tb.rows[element.parentNode.parentNode.rowIndex].cells[1].children[0].value = result;
                      
                   },error: function() {
                       alert('Error occured');
                   }});
                $.ajax({url: "populateCredits.php",
                     data: {ccode:selectedValue},
                     type: "POST",
                    success: function(result,data){
                      var tb = document.getElementById("tb_core");
                      tb.rows[element.parentNode.parentNode.rowIndex].cells[2].children[0].value = result;
                      
                   },error: function() {
                       alert('Error occured');
                   }});
              }
         </script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
         <script type="text/javascript">
         	$(document).ready(function(){
         		var selectedValue = document.getElementById('semid').innerHTML;
			     // 	alert(selectedValue);
				        $.ajax({url: "populateSem_core.php",
                     data: {sem:selectedValue},
                     type: "POST",
                    success: function(result,data){
                    	var tb = document.getElementById("tb_core");
                    	tb.rows[1].cells[0].children[0].innerHTML = result;
                   },error: function() {
                       alert('Error occured');
                   }});
			         });
              	
         </script>
            
         <script>
         	$(function(){
                $('#addMore_core').on('click', function() {
                          var data = $("#tb_core tr:eq(1)").clone(true).appendTo("#tb_core");
                          data.find("select").val('');
                           data.find("input").val('');
                 });
                 $(document).on('click', '.remove', function() {
                     var trIndex = $(this).closest("tr").index();
                        if(trIndex>1) {
                         $(this).closest("tr").remove();
                       } else {
                         //alert("Sorry!! Can't remove first row!");
                       }
                  });
            });  
            $(function(){
                $('#addMore_elec').on('click', function() {
                          var data = $("#tb_elec tr:eq(1)").clone(true).appendTo("#tb_elec");
                          data.find("select").val('');
                           data.find("input").val('');
                 });
                 $(document).on('click', '.remove', function() {
                     var trIndex = $(this).closest("tr").index();
                        if(trIndex>1) {
                         $(this).closest("tr").remove();
                       } else {
                         //alert("Sorry!! Can't remove first row!");
                       }
                  });
            });
            $(function(){
                $('#addMore_ra').on('click', function() {
                          var data = $("#tb_ra tr:eq(1)").clone(true).appendTo("#tb_ra");
                          data.find("select").val('');
                           data.find("input").val('');
                 });
                 $(document).on('click', '.remove', function() {
                     var trIndex = $(this).closest("tr").index();
                        if(trIndex>1) {
                         $(this).closest("tr").remove();
                       } else {
                         //alert("Sorry!! Can't remove first row!");
                       }
                  });
            });      
         </script>
      </html>