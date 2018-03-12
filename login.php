<?php
// Create connection
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products"); ;

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = mysqli_query($con,"SELECT * FROM register");
$userForm=$_POST['username'];
$passForm=$_POST['password'];
$count=0;
while($row = mysqli_fetch_array($sql))
  { 
        if( $userForm==$row['username'] && $passForm==$row['password'])
		{
			session_start();
		    $_SESSION['myusername']=$userForm;
			$count=1;
			header('Location: login_success.php?username='.$userForm);
		}
  }
  
 if($count==0)
 { echo "enter correct details";}
?>