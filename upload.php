<?php
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products");  //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
 
$file=$_FILES['path']['tmp_name'];
$name=$_FILES['path']['name'];

$path="images/mobiles home/".$name;
$sql="INSERT INTO mobile (brand,path,name,price,feature1,feature2,feature3)
VALUES
('$_POST[brand]','$path','$_POST[name]','$_POST[price]','$_POST[feature1]','$_POST[feature2]','$_POST[feature3]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  

move_uploaded_file($_FILES["path"]["tmp_name"],"images/mobiles home/" . $_FILES["path"]["name"]);
      echo "Stored in: " . "images/mobiles home";
	  echo "<br />";

  
  
echo '1 record added <br />';
echo '<a href="upload.html">go back</a>';





mysqli_close($con);

?>