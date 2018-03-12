<html>
<style>
#bill
{
	background:linear-gradient(grey,black);
	position:relative;
	height:500px;
	width:700px;
	left:320px;
	text-align:center;
	color:rgba(255,255,255,1);
	font-size:30px;
	
}
h1
{ color:rgba(255,153,0,1);
	font-family:Verdana, Geneva, sans-serif;
	font-size:25px;
}

</style>
<body>

<div id="bill">
<br><br><br><br>
<h1>Billing confirmation</h1>
<?php 
echo 'Your name:'.$_POST['first'].' '.$_POST['last'].';<br>
Address :'.$_POST['add'].'<br>
Mobile number : '.$_POST['mob'].'<br>
model name :'.$_GET['product'].'<br>';


$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products");  //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

$sql="INSERT INTO orders (firstname,lastname,address,mobile,product)
VALUES
('$_POST[first]','$_POST[last]','$_POST[add]','$_POST[mob]','$_GET[product]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }









?>
</div>


</body>

</html>

