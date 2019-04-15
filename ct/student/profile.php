<?php
session_start();
if (empty($_SESSION['regno'])){
  header('Location: /ct/student');
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
  function print(sem){
    $.ajax({url: "fpdf/printsem.php",
          data: {sem:sem},
          type: "POST",
         success: function(result){
          
          //  $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
  }
</script>

<script>
$(document).ready(function(){
  $.ajax({url: "welcome.php",
          type: "POST",
         success: function(result){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    $("#home").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "welcome.php",
          type: "POST",
         success: function(result){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#logout").click(function(){
      $.ajax({url: "logout.php",
          type: "POST",
          success: function(result){
            location.href= "/ct/student";
           // $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });

    $("#sem1").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"1"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem2").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"2"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem3").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"3"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem4").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"4"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem5").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"5"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem6").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"6"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem7").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"7"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#sem8").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "sem.php",
          data: {regno:reg,sem:"8"},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#add").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "add.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });
    $("#pass").click(function(){
      var reg = document.getElementById('tech').innerHTML
        $.ajax({url: "newpass.php",
          data: {regno:reg},
          type: "POST",
         success: function(result,data){
            $("#tech").html(result);
        },error: function() {
            alert('Error occured');
        }});
    });

    $("#manual").click(function(){
      window.location.href = "http://www.ct.mitindia.edu/ct/student/UserManual.pdf";
        
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


<li id = "manual">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">M</i>
      <br>

    </span><br><br>
<span class="nav-text"><br>VIEW MANUAL</span>
</a>
</li>   

<li id = "add">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">+</i>
      <br>

    </span><br><br>
<span class="nav-text"><br>ADD SUBJECTS</span>
</a>
</li>   
    

<li id = "pass">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">#</i>
    </span><br><br>
<span class="nav-text">CHANGE PASS</span>
</a>
</li>    

<li id = "sem1">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">1</i>
    </span><br><br>
<span class="nav-text">SEMESTER 1</span>
</a>
</li>   


<li id = "sem2">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">2</i>
    </span><br><br>
<span class="nav-text">SEMESTER 2</span>
</a>
</li>   
 
<li id = "sem3">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">3</i>
    </span><br><br>
<span class="nav-text">SEMESTER 3</span>
</a>
</li>   
 
<li id = "sem4">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">4</i>
    </span><br><br>
<span class="nav-text">SEMESTER 4</span>
</a>
</li>   
 
<li id = "sem5">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">5</i>
    </span><br><br>
<span class="nav-text">SEMESTER 5</span>
</a>
</li>   
 
<li id = "sem6">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">6</i>
    </span><br><br>
<span class="nav-text">SEMESTER 6</span>
</a>
</li>   
 
<li id = "sem7">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">7</i>
</span><br><br>
<span class="nav-text">SEMESTER 7</span>
</a>
</li>   
 
<li id = "sem8">                                   
<a href="#"> &nbsp &nbsp
<span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-inverse fa-stack-1x">8</i>
      <br>

    </span><br><br>
<span class="nav-text"><br>SEMESTER 8</span>
</a>
</li>   
 
<li id = "logout">                                   
  <a href="#"> &nbsp &nbsp
  <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-inverse fa-stack-1x">X</i>
        <br>

      </span><br><br>
  <span class="nav-text"><br>LOGOUT</span>
  </a>
</li>      

    </ul>
  </div>
</nav>
    
    <CENTER>
     <div id = "tech" style="background-image: 'bg.jpeg'"><?php
     echo $_SESSION['regno']?>
       
     </div>
    </CENTER>
  
  

</body>

</html>
