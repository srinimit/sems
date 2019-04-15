<?php
session_start();
unset($_SESSION['regno']);
if (empty($_SESSION['id'])){
  header('Location: /ct/staff');
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>PROFILE</title>
  <link rel="stylesheet" href="../css/profilestyle.css">
</head>

<body>
  <!DOCTYPE html><html class="menu">
<html>

<head>

<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
<meta name="google" value="notranslate"/>
<title>Side Menu</title>

<link rel="stylesheet" type="text/css" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $.ajax({url: "swelcome.php",
          type: "POST",
         success: function(result){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    $("#home").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "swelcome.php",
          type: "POST",
         success: function(result){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
     $("#list").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "list/list.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });

     $("#query").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "query/query.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });

    $("#create").click(function(){
      var reg = document.getElementById('tech').innerHTML;
        $.ajax({url: "create/sadd.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#spass").click(function(){
      var reg = document.getElementById('tech').innerHTML;
        $.ajax({url: "utils/spass.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
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
  
<li id ="home">                                   
<a href="#"> &nbsp &nbsp
<i class="fa fa-home fa-lg"></i>
<span class="nav-text">Home</span>
</a>
</li>  

<li id = "list">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">L</i>
    </span><br><br>
<span class="nav-text">LIST</span>
</a>
</li>   


<li id = "create">                                   
    <a href="#"> &nbsp &nbsp
    <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-inverse fa-stack-1x">C</i>
        </span><br><br>
    <span class="nav-text">Create Student Profile</span>
    </a>
</li>   
 
<li id = "edit">                                   
    <a href="#"> &nbsp &nbsp
    <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-inverse fa-stack-1x">E</i>
        </span><br><br>
    <span class="nav-text">EDIT student profile</span>
</a>
</li>   
 <li id = "query">                                   
    <a href="#"> &nbsp &nbsp
    <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-inverse fa-stack-1x">Q</i>
        </span><br><br>
    <span class="nav-text">Query student profile</span>
    </a>
</li>
<li id = "spass">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">P</i>
    </span><br><br>
<span class="nav-text">Updates</span>
</a>
</li>   
</ul>     
<ul class="logout">
<li>
                   <a href="#">
                         <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">
                            Log Out
                        </span>
                        
                    </a>
</li>  
</ul>
</nav>
    

    </ul>
  </div>
</nav>
    
    <CENTER>
     <div id = "tech" style="background-image: 'bg.jpeg'"><?php
     echo $_SESSION['id']?>
       
     </div>
     <div id = "tech1" style="background-image: 'bg.jpeg'"><?php
     //echo $_SESSION['id']?>
       
     </div>
    </CENTER>
  
  

</body>

</html>
