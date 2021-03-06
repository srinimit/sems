<?php
session_start();
if (!(empty($_SESSION['regno']))){
  header('Location: /ct/student/profile.php');
}
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CT MIT</title>
  <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>

  <div class="container">
  <div class="title">
    <div class="brand">
     DCT<BR> STUDENT LOGIN
    </div>
    <div class="subtitle">
      Please! Login to continue
    </div>
  </div>
    
    <form action="login.php" method="post">
      <div class="row">
      <div class="input-group" id="username">
         <i data-feather="user"></i>
        <input type="text" name="regno" placeholder="Register Number">
      </div>
    </div>
    <div class="row">
      <div class="input-group">
        <i data-feather="lock"></i>
        <input type="password" name="pass" placeholder="Password">
      </div>
    </div>
    <div class="row">
      <button>LOGIN <i data-feather="chevron-right"></i></button>
    </div>
  </form>
    
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.8.0/feather.min.js'></script>
  <script  src="../js/index.js"></script>
</body>

</html>
