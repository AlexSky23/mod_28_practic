<?php
$log1 = htmlspecialchars($_POST["login"]);
$pass1 = htmlspecialchars($_POST["password"]);
setcookie("id", $log1, time()+60*60*24*30, "/");
setcookie("hash", $pass1, time()+60*60*24*30, "/", null, null, true); // httponly !!! 
//echo "Log: ".$log1;
//echo $_COOKIE['id'];
header("Location: /index.php");
?>