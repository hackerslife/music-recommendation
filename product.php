
<html>
	<head>
	<title>PRODUCT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title><?php echo "$product_name";?></title>
	<?php
	
		if($_POST['t1']=='t1')
		{
			$id = $_POST['t1'];
			
		}
		else if($_POST['d1']=='d1')
		{
			$id = $_POST['d1'];
		}
		else if($_POST['c1']=='c1')
		{
			$id = $_POST['c1'];
		}
		else if($_POST['t2']=='t2')
		{
			$id = $_POST['t2'];
		}
		else if($_POST['t3']=='t3')
		{
			$id = $_POST['t3'];
		}
		else if($_POST['c2']=='c2')
		{
			$id = $_POST['c2'];
		}
		else if($_POST['e1']=='e1')
		{
			$id = $_POST['e1'];
		}
		else if($_POST['e3']=='e3')
		{
			$id = $_POST['e3'];
		}
		else if($_POST['t4']=='t4')
		{
			$id = $_POST['t4'];
		}
		else if($_POST['e4']=='e4')
		{
			$id = $_POST['e4'];
		}
		else if($_POST['c3']=='c3')
		{
			$id = $_POST['c3'];
		}
		else if($_POST['e5']=='e5')
		{
			$id = $_POST['e5'];
		}
		else if($_POST['c4']=='c4')
		{
			$id = $_POST['c4'];
		}
		else if($_POST['c5']=='c5')
		{
			$id = $_POST['c5'];
		}
		else if($_POST['c6']=='c6')
		{
			$id = $_POST['c6'];
		}
		else if($_POST['canvas']=='canvas')
		{
			$id = $_POST['canvas'];
		}
		
?>
	</head>
	<body>
	<form method="post" action="customer.html">
		<div id="mySidenav" class="sidenav">
  <a href="home.html" id="home">Home</a>	
  <a href="men.html" id="Him">Cambric</a>
  <a href="women.html" id="Her">Canvas </a>
  <a href="kids.html" id="Kids">Duck Cloth</a>
  
	
  
</div>
		  <div class="caption">
			<span class="border"><a href="home.html">GOYAL TEXTILES</a></span>
		  </div>
		  
		<div align="center" style="margin-top:12%">
			<img src="images/<?php echo "$id";?>.JPG" alt = <?php echo $product_name?> >
			
			<br>
			<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
			<input type="hidden" name="product_name" id="product_name" value="<?php echo $product_name; ?>" />
			<input type="hidden" name="price" id="price" value="<?php echo $price; ?>" />
			<input type="submit" value="Send enquiry" style="font-family:sans-serif; background-color:black; color:#fff; font-size:15px">
		</div>

			<div class="footer">
				<footer>
						<P style="color:white;">Address: Shop No. 13, Chaura Rasta, Jaipur</P>
						<ul>
							<li class="list"><a href="www.pinterest.com"><img class="link" src="pin.png"></li>
							<li class="list"><a href="www.twitter.com"><img class="link" src="twi.png"></li>
							<li class="list"><a href="www.linkdin.com"><img class="link" src="in.png"></li>
							<li class="list"><a href="www.facebook.com"><img class="link" src="face.png"></li>
						</ul>
						
				</footer>
			</div>
		</form>
	</body>
</html> 
