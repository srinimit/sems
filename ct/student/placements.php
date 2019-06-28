<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
      <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
      <link rel="stylesheet" href="../css/style.css">
   
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
      }

      /* Safari */
      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
      </style>

   </head>
   <body>
      <html>
         <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
           
         </script>
         
         <script>
            $(document).ready(function () {
              $("#addbtn").click(function(){
                 var a = confirm("Click to confirm!");
                if(a){
                    var rowCount = $("#tb_intern td").closest("tr").length;
                    var tb = document.getElementById("tb_intern");
                    for(var i=1;i<=rowCount;i++){
                        var designation = tb.rows[i].cells[0].children[0].value;
                        var cn = tb.rows[i].cells[1].children[0].value;
                        var loc = tb.rows[i].cells[2].children[0].value;
                        var sdate = tb.rows[i].cells[3].children[0].value;
                        var edate = tb.rows[i].cells[4].children[0].value;
                        var package = tb.rows[i].cells[5].children[0].value;
                       if(designation.length!=0 && cn.length != 0&&loc.length != 0&&sdate.length != 0&&edate.length != 0){
                          $.ajax({url: "internshipsUtil.php",
                            type: "POST",
                            async: false,
                            data:{
                              designation:designation,cn:cn,sdate:sdate,edate:edate,loc:loc,package:package
                            },
                           success: function(result,data){
                            if(result.length!=0){
                            alert(result);
                             }
                          },error: function() {
                              alert('Error occured');
                          }});  
                        }
                        
                    }

                    var rowCount = $("#tb_place td").closest("tr").length;
                    var tb = document.getElementById("tb_place");
                    for(var i=1;i<=rowCount;i++){
                        var designation = tb.rows[i].cells[0].children[0].value;
                        var cn = tb.rows[i].cells[1].children[0].value;
                        var loc = tb.rows[i].cells[2].children[0].value;
                        var package = tb.rows[i].cells[3].children[0].value;
                        if(cn.length != 0&&loc.length != 0){
                          $.ajax({url: "placementUtil.php",
                            type: "POST",
                            async: false,
                            data:{
                              designation:designation,cn:cn,loc:loc,package:package
                            },
                           success: function(result,data){
                            if(result.length!=0){
                            alert(result);
                             }
                          },error: function() {
                              alert('Error occured');
                          }});  
                        }
                        
                    }

                    var rowCount = $("#tb_score td").closest("tr").length;
                    var tb = document.getElementById("tb_score");
                    for(var i=1;i<=rowCount;i++){
                        var test = tb.rows[i].cells[0].children[0].value;
                        var score = tb.rows[i].cells[1].children[0].value;
                        if(test.length != 0){
                          $.ajax({url: "testscores.php",
                            type: "POST",
                            async: false,
                            data:{
                              test:test,score:score
                            },
                           success: function(result,data){
                            if(result.length!=0){
                            alert(result);
                             }
                          },error: function() {
                              alert('Error occured');
                          }});  
                        }
                        
                    }
                     
                alert("Successfully Updated");
                $("#tech").html("<meta http-equiv=\"refresh\" content=\"1;url=profile.php\">");

                }
                
               }
              ); 
            
            //  $('#dtBasicExample').DataTable();
            // $('.dataTables_length').addClass('bs-select');
            });
          
            
         </script>
         
         <div class="container" style = "margin-left: 40px; margin-top: 15px; height: 750px;width: 1300px; text-align: right;">
            <div style="overflow-y:auto; height: 700px; width: 1250px" >
               <center>
                *ENTER ALL DETAILS IN UPPERCASE*
                <br>
                *ENTER PACKAGE IN WHOLE NUMBER AVOIDING COMMAS*
               </center>
               <H1>
                  <center>Intern Details</center>
               </H1>
               <table id="tb_intern" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                    <th> Designation</th>
                     <th>Company Name</th>
                     <th>Company Location(City)</th>
                     <th>Start Date</th>
                     <th>End Date</th>
                     <th>Package(Monthly)</th>
                     
                     <th>
                      <a href="javascript:void(0);" style="font-size:18px;" id="addMore_intern" title="Add More Subjects">
                        <i class="fa fa-plus" style="font-size:36px"></i>
                      </a>
                     </th>
                  </tr>
                  <tr>
                    <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "idesign">
                     </td>
                     <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "icompname">
                     </td>
                     <td><input type="text" size="45"  style = "width:170px;overflow:hidden;" id= "icomploc"></td>
                     <td><input type="text" name="sdate" id="sdate" class="input-text" placeholder="dd/mm/yyyy"></td>
                     <td><input type="text" name="edate" id="edate" class="input-text" placeholder="dd/mm/yyyy]"></td>
                     <td><input type="text" size="25" placeholder="0000000" style = "width:100px;overflow:hidden;" id= "ipackage"></td>
                    <td>
                      <a href='javascript:void(0);'  class='remove'><i class="fa fa-minus" style="font-size:36px"></i>
                      </a>
                     </td>
                  </tr>
               </table>
               <H1>
                  <center>Placement Details</center>
               </H1>
               <table id="tb_place" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                    <th> Designation</th>
                     <th>Company Name</th>
                     <th>Company Location(City)</th>
                     <th>Package(Yearly)</th>
                     
                  </tr>
                  <tr>
                     <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "designation">
                     </td>
                     <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "compname">
                     </td>
                     <td><input type="text" size="45"  style = "width:170px;overflow:hidden;" id= "comploc"></td>
                     <td><input type="text" size="25" pattern="[0-9]" placeholder="0000000"  style = "width:100px;overflow:hidden;" id= "package"></td>
                     
                  </tr>
               </table>
               <H1>
                  <center>Score Details</center>
               </H1>
               <table id="tb_score" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                     <th>Test Name(GRE/GATE etc)</th>
                     <th>Score</th>
                     
                     <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore_score" title="Add More tests">
                      <i class="fa fa-plus" style="font-size:36px"></i>
                        </a>
                     </th>
                  </tr>
                  <tr>
                     <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "testname">
                     </td>
                     <td><input type="text" size="55"  style = "width:250px;overflow:hidden;" id= "score">
                     </td>
                     <td>
                     <a href='javascript:void(0);'  class='remove'><i class="fa fa-minus" style="font-size:36px"></i>
                      </a>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
         <CENTER><button id="addbtn"> Submit</button></CENTER>
         
         
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   
         <script>
          $(function(){
                $('#addMore_intern').on('click', function() {
                          var data = $("#tb_intern tr:eq(1)").clone(true).appendTo("#tb_intern");
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
                $('#addMore_score').on('click', function() {
                          var data = $("#tb_score tr:eq(1)").clone(true).appendTo("#tb_score");
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