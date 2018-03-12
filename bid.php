<?php
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products"); //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } 
$result = mysqli_query($con,"SELECT * FROM bid");
$name=$_GET['name'];
$bidprice=$_GET['amount'];

date_default_timezone_set('Asia/Kolkata');
$time=date("H");
if($time<18)
{
	$result = mysqli_query($con,"SELECT price FROM bid WHERE name='".$name."'");
while($row = mysqli_fetch_array($result))
{
		if($row['price'] < $bidprice)	
		{
						$sql="UPDATE bid SET price='".$bidprice."' WHERE name='".$name."'";
						if (!mysqli_query($con,$sql))
  						{die('Error: ' . mysqli_error($con));}
			echo "bid updated<br>";
			echo '<a href="http://localhost/mobiles bidding.php">go back</a>';
		}

		else
		{echo "bid cannt b upadted.enter another value<br>";
		echo '<a href="http://localhost/mobiles bidding.php">go back</a>';
		}
}
}
if($time>18)
{
	echo "bid closed";
}

//header('Location: mobiles bidding.php');
mysqli_close($con);
?>