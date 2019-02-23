<?php

session_start();
$reg = $_SESSION['regno'];
echo "<br><br><h1>Welcome, $reg </h1>";
?>