<?php 
session_start();
session_destroy();
echo "logged out successfully";
header('Location:index.html');
?>