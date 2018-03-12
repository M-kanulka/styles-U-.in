<?php
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products");  //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } 
$username=$_POST['username'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$sql="INSERT INTO register VALUES
('$username','$password','$mobile')";
if (!mysqli_query($con,$sql))
  {
  die("Error: can't register,try again");
  }
else
{
echo "register successfully<br>";
echo '<a href="index.html">go back</a>';

}
mysqli_close($con);

?>