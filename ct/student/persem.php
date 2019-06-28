<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
session_start();
?>

<html>
<table>
   <tr>
      <td><h2>Select Semester</h2></td>
      <td align="right" colspan="2">
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
</tr>
</table>
      
      
      <div id = "persem"></div>
      <script type="text/javascript">
         function changeSem(element) {
             var selectedValue = element.value;
             $.ajax({url: "sem.php",
                data: {sem:selectedValue},
                type: "POST",
               success: function(result,data){
                  $("#persem").html(result);
              },error: function() {
                  alert('Error occured');
              }});
          }
      </script>

</html>