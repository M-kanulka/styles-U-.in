<?php
session_start();
echo $username=$_GET['username'];
if(!isset($_SESSION[$username]))
header('Location:index.html');

?>
