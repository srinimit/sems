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
      <td align="right" colspan="2"><select class="shortenedSelect" onchange = "changeSem(this);">
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