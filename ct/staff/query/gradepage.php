<?php
session_start();
$_SESSION['regno']=$_POST['regno'];
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PROFILE</title>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>
  <!DOCTYPE html><html class="menu">
<html>

<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Side Menu</title>
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var reg = (document.getElementById('tech1').innerHTML).trim();
  var grade = (document.getElementById('grade1').innerHTML).trim();
  $.ajax({url: "listGrade.php",
            data: {regno:reg,grade:grade},
            type: "POST",
           success: function(result,data){
            $("#tech").html(result);
          },error: function() {
              alert('Error occured');
          }});
    $("#home1").click(function(){
       location.reload();
    }); 
}
);
</script> 
 
</head>
<body background="bg.jpeg">

</div><nav class="main-menu">
  
<div>
    <a class="logo" href="">
    </a> 
  </div> 
<div class="settings"></div>
<div class="scrollbar" id="style-1">

<ul>
<li id ="home1">                                   
<a href="#"> &nbsp &nbsp
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>  

</nav>
</ul>
</div>
</nav>
    <CENTER>
     <div id = "tech1" style="display: none;"><?php
     echo $_POST['regno'];?></div>
     <div id = "grade1" style="display: none;"><?php
     echo $_POST['grade'];
     ?>
       
     </div>
    </CENTER>
  
  

</body>

</html>
