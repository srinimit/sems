<?php

session_start();
$reg = $_SESSION['id'];
echo "<br><br><h1>Welcome, $reg </h1>";
?>