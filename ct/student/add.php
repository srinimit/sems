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
                 var a = confirm("Click to confirm!");
                if(a){
                    var ans=0;
                      var rowCount = $("#tb_ra td").closest("tr").length;
                      var tb = document.getElementById("tb_ra");
                      for(var i=1;i<=rowCount;i++){
                          var cc = tb.rows[i].cells[1].children[0].value;
                          var cn = tb.rows[i].cells[2].children[0].value;
                          var cr = tb.rows[i].cells[3].children[0].value;
                          var grade = tb.rows[i].cells[4].children[0].value;
                          $.ajax({url: "addUtilRA.php",
                                    type: "POST",
                                    async: false,
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
                        var alt = tb.rows[i].cells[5].children[0].value;
                        $.ajax({url: "addUtilElec.php",
                                  type: "POST",
                                  async: false,
                                  data:{
                                    cc:cc,cn:cn,cr:cr,grade:grade,alt:alt
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
                                  async: false,
                                  data:{
                                    cc:cc,cn:cn,cr:cr,grade:grade
                                  },
                                 success: function(result,data){
                                  
                                },error: function() {
                                    alert('Error occured');
                                }});  
                      }
                      alert("Successfully Updated");
                      $.ajax({url: "incrementSem.php",
                            type: "POST",
                            async: false,
                         success: function(result,data){
                            
                          },error: function() {
                              alert('Error occured');
                          }});  
                
                $("#tech").html("<meta http-equiv=\"refresh\" content=\"1;url=profile.php\">");

                }
                
               }
               ); 
            
            //  $('#dtBasicExample').DataTable();
            // $('.dataTables_length').addClass('bs-select');
            });
          
            
         </script>
         
         <H1>
            <center>Current Sem:
              <div id="semid"><?php
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
         
         <div class="container" style = "margin-top: 15px; height: 650px;width: 1150px; text-align: right;">
            <div style="overflow-y:auto; height: 500px; width: 1100px" >
               <H1>
                  <center>Core Subjects</center>
               </H1>
               <table id="tb_core" class="table table-striped table-bordered table-sm" cellspacing="0" width="70">
                  <tr>
                     
                     <th>Course code</th>
                     <th>Course name</th>
                     <th>Credits</th>
                     <th>Grade</th>
                     
                  </tr>

                  <?php
                  $reg=$_SESSION['regno'];
                  $servername = "mysql.ct.mitindia.edu";
                  $username = "ctalumni_chair";
                  $password = "mitctalumni2019";
                  $dbname = "ctalumni";

                  // Create connection
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  $sql = "select * from student where regno='$reg'";
                  $result = mysqli_query($conn,$sql);
                  $grad ="";
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row=mysqli_fetch_array($result)){
                      $curr = $row['sem'];
                      $type = $row['type'];
                      $grad = $row['grad'];
                    }
                   //  echo "<tr><td>".$curr.$type."</td></tr>";
                    if($grad=="PG"){
                      $type=$type.$grad;
                    }
                    $sqlSubs="SELECT * FROM `$type` WHERE `sem`= $curr";
                   // echo "<tr><td>".$sqlSubs."</td></tr>";
                    $resultSubs = mysqli_query($conn,$sqlSubs);
                    //echo "<select id=\"code1\" onchange=\"changeFunc(this);\">";
                    
                    if(mysqli_num_rows($resultSubs)>0)
                    {
                      while($r=mysqli_fetch_array($resultSubs)){
                        echo "<tr><td><input type='text' readonly id = 'coursecodes' value = '".$r['ccode']."'></input></td>";
                        echo "<td><input type='text'size=\"55\" readonly id = 'coursecodes' value = '".$r['cname']."'></input></td>";
                        echo "<td><input type='text' readonly id = 'coursecodes' value = '".$r['credits']."'></input></td>";
                        echo "<td><select>
                           <option></option>
                           <option id = \"O\">O</option>
                           <option id = \"A+\">A+</option>
                           <option id = \"A\">A</option>
                           <option id = \"B+\">B+</option>
                           <option id = \"B\">B</option>
                           <option id = \"RA\">RA</option>
                           <option id = \"SA\">SA</option>
                           <option id = \"#RA\">#RA</option>
                        </select></td>
                        </tr>";
                      }
                    }
                  }
                
                  ?>
                    
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
                       <?php
                           $reg=$_SESSION['regno'];
                            $servername = "mysql.ct.mitindia.edu";
                            $username = "ctalumni_chair";
                            $password = "mitctalumni2019";
                            $dbname = "ctalumni";

                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            $sql = "select * from student where regno='$reg'";
                            $result = mysqli_query($conn,$sql);
                            $grad ="";
                            echo "<select onchange = \"changeSem(this);\">
                           <option></option>"; 
                            if(mysqli_num_rows($result)>0)
                            {
                              while($row=mysqli_fetch_array($result)){
                                $grad = $row['grad'];
                              }
                             //  echo "<tr><td>".$curr.$type."</td></tr>";
                              if($grad=="PG"){
                                for ($i = 1; $i < 5; $i++){
                                  echo "<option id='$i'>$i</option>";
                                }

                              }
                              else{
                                for ($i = 1; $i < 9; $i++){
                                  echo "<option id='$i'>$i</option>";
                                }
                              }
                              echo " </select>";
                              }
                           ?>
                          
                        
                     </td>
                     <td>
                        <select></select>
                     </td>
                     <td><input type="text" size="55" readonly  style = "width:250px;overflow:hidden;" id= "coursename"></td>
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
                     <th>Alternative Course<br>(Mandatory for RA)</th>
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
                     <td><input type="text" size="55" readonly id= "coursename"  style = "width:250px;overflow:hidden;"></td>
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
                     <td>
                        <select></select>
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
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[5].innerHTML = "<input type=\"text\" id= \"codeOpt\"/>";
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
                  $.ajax({url: "populateSem_elec_Opt.php",
                     data: {sem:0},
                     type: "POST",
                    success: function(result,data){
                      var tb = document.getElementById("tb_elec");
                      
                      tb.rows[element.parentNode.parentNode.rowIndex].cells[5].innerHTML = result;
                   },error: function() {
                       alert('Error occured');
                   }});

                }
                else{
                  var tb = document.getElementById("tb_elec");
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[1].innerHTML = "<input readonly type=\"text\"/>";
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[2].innerHTML = "<input readonly type=\"text\" id= \"coursename\"/>";
                  tb.rows[element.parentNode.parentNode.rowIndex].cells[3].innerHTML = "<input readonly type=\"text\" id= \"credits\"/>";
                   tb.rows[element.parentNode.parentNode.rowIndex].cells[5].innerHTML = "<input readonly type=\"text\"/>";
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
           //   alert(selectedValue);
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