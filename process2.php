<html>
<head>
<title>style4u.in</title>
<link rel="stylesheet" type="text/css" href="stylenew.css" />
</head>
<body>
<div class="header">
<div id="title">Style4u.in</div>
<div class="nav">
<ul>
<li><a href="index.html">HOME</li>

<li><a href="#">REGISTER</a> <ul><li>username:<form method="post" style="position:relative;left:-20px;" action="register.php"><input type="text" name="username">password:<input type="password" name="password">mobile:<input type="text" name="mobile"><input type="submit" value="register"></form></li></ul></li>
<li><a href="about.html">ABOUT US</li>
<li><a href="media.html">MEDIA</li>
<li><a href="mobile.html">MOBILES </a>  <ul> <li> <a href="process.php?array[]=samsung&category=mobile">SAMSUNG </a></li>
					<li><a href="process.php?array[]=nokia&category=mobile"> NOKIA </a></li>
                    <li><a href="process.php?array[]=sony&category=mobile"> SONY</a> </li>
                    <li><a href="process.php?array[]=micromax&category=mobile"> MICROMAX</a> </li>
				</ul>
</li>
<li><a href="laptops.html">LAPTOPS</a> <ul> <li><a href="process.php?array[]=hp&category=laptop"> HP</a> </li>
					<li><a href="process.php?array[]=lenovo&category=laptop"> LENOVO</a> </li>
                    <li><a href="process.php?array[]=dell&category=laptop"> DELL</a> </li>
                    <li><a href="process.php?array[]=apple&category=laptop"> APPLE</a> </li>
				</ul>	
 </li>
<li>
   <a href="men.html"> MEN'S WEAR</a>
    <ul>
      <li><a href="process.php?array[]=shirts&category=men">SHIRTS</li></a>
      <li><a href="process.php?array[]=jeans&category=men">JEANS</li></a>
      <li><a href="process.php?array[]=t-shirts&category=men">T-SHIRTS</li></a>
      <li><a href="process.php?array[]=ethnic&category=men">ETHNIC WEAR</li></a>
    </ul>
  </li>
  <li><a href="women.html">WOMEN'S WEAR	</a><ul>
      <a href="process.php?array[]=dresses&skirts&category=women"><li>DRESSES&SKIRTS</li>
      <a href="process.php?array[]=tops&category=women"><li>TOPS</li>
      <a href="process.php?array[]=sarees&category=women"><li>SAREES</li>
      <a href="process.php?array[]=t-shirts&category=women"><li>T-SHIRTS</li>
    </ul>
  
  
  </li>
  <li><a href="books.html">BOOKS</a></li>
  <li><a href="mobiles bidding.php">BIDDING FOR MOBILES</a></li>
  <li style="background: rgba(255,153,0,1);"><a href="#">LOGIN </a><ul><li>username:<form method="post" style="position:relative;left:-20px;" action="login.php"><input type="text" name="username">password:<input type="password" name="password"><input type="submit" value="login"></form></li></ul></li>
</ul>
</div>
</div>
<div class="main-content">
<div id="left">
<div id="left1">
<h1>Search</h1>
<form action="process.php" method="GET">
<input type="text" name="feature">
<input type="submit" value="search">
<input type="checkbox" name="category" value="mobile" checked style="visibility:hidden;">
</form>
</div>
<div id="left1">
<h1> Brand</h1>
<form action="process.php" method="GET">
<ul>
<li><input type="checkbox" name="array[]" value="samsung"/><a href="#">Samsung</a></li>
<li><input type="checkbox" name="array[]" value="nokia" /><a href="#">Nokia</a></li>
<li><input type="checkbox" name="array[]" value="motorola" /><a href="#">Motorola</a></li>
<li><input type="checkbox" name="array[]" value="sony" /><a href="#">Sony</a></li>
<li><input type="checkbox" name="array[]" value="micromax" /><a href="#">Micromax</a></li>
<input type="checkbox" name="category" value="mobile" style="display:none;" checked />
<input type="submit" id="button"  value="search">
</ul>
</form>
</div>
<div id="left1">
<h1>Price</h1>
<ul>
<li><a href="process.php?category=mobile&price1=2001&price2=5000">Rs. 2001 - Rs. 5000 </a></li>
<li><a href="process.php?category=mobile&price1=5001&price2=10000">Rs. 5001 - Rs. 10000</a></li>
<li><a href="process.php?category=mobile&price1=10001&price2=18000">Rs. 10001 - Rs. 18000</a></li>
<li><a href="process.php?category=mobile&price1=18001&price2=25000">Rs. 18001 - Rs. 25000</a></li>
<li><a href="process.php?category=mobile&price1=25001&price2=35000">Rs. 25001 - Rs. 35000</a></li>
</ul>
</div>
<div id="left1">
<h1>Features</h1>
<ul>
<li><a href="process.php?category=mobile&feature=android">android</a></li>
<li><a href="process.php?category=mobile&feature=windows">windows</a></li>
<li><a href="process.php?category=mobile&feature=camera">camera</a></li>
</ul>
</div>


</div>
<div id="right">
<h1><?php echo $_GET['product']." ".$_GET['category']; ?> </h1>

<?php 
$con=mysqli_connect("localhost","styleyou_shiva","shiva123","styleyou_products");  //connecting to database 
if (mysqli_connect_errno())// Checking connection 
{ echo "Failed to connect to MySQL: " . mysqli_connect_error(); } 
$result = mysqli_query($con,"SELECT * FROM ".$_GET['category']." where name='".$_GET['product']."'");
while($row = mysqli_fetch_array($result))
  {
echo '<div id="image">';
echo '<img style="height:320px; width:200px; position:relative; left:-280px;" src="'.$row['path'].'" />';
echo '<a href="buy.php?category=mobile&product='.$row['name'].'" class="buy">Price:'.$row['price'] . '  Buy now </a></div>';
echo '<div id="features"><h1> features </h1><ul style="list-style:none; font-family:Verdana, Geneva, sans-serif;"> 
	 <li>'.$row['feature1'].'</li><li>'.$row['feature2'].'</li><li>'.$row['feature3'].'</li></ul></div>';

}
?>

</div>
<div id="footer">
<div id="content1">
<p>Style4u.in is India's largest e-commerce marketplace. Style4u.in provides a platform for vendors across the country to connect with millions of customers.The platform has the widest assortment of products from thousands of national, international and regional brands across diverse categories like Mobiles, Laptops, Cameras, Appliances, Women's Apparel, Men's Apparel, Watches, Home & Kitchen, Automotive, Health, Books. Grab your favorite products @ best prices and save the one thing that matters most to you - "Your Money". 
</p>
</div>
<div id="content2">
<ul>
<li>follow us on : </li>
<li><a href="http://www.facebook.com" class="facebook"></a></li>
<li><a href="http://www.google.com" class="google"></a></li>
<li><a href="http://www.twitter.com" class="twitter"></a></li>
</ul>
</div>
</div>

</div>
</body>
</html>