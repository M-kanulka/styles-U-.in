<?php
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products");  //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } 

$category=$_GET['category'];
$price1=$_GET['price1'];
$price2=$_GET['price2'];
$result = mysqli_query($con,"SELECT * FROM ".$category." WHERE price BETWEEN ".$price1." AND ".$price2);
while($row = mysqli_fetch_array($result))
  {
	  echo $row['brand'];
																											;
}	
	
mysqli_close($con);
?>