 <!DOCTYPE html>
<html lang="en">
        <head>
                <title><h1>contact1</h1></title>
                <meta charset="utf-8" />
				<link href="main.css"  rel="stylesheet" type="text/css" />
				<link href="grid.css"  rel="stylesheet" type="text/css" />
        </head>
		
		<body>
		
		<div id="container" class="grid10 first">
		
			<div class="grid9" id="header"> 
				<h1>BUBBA</h1>
				<img src="images/header1.jpg" class="imagecenter" alt="hair"/>
			</div>
			
			<div id="header1" class="grid9">
				<h1><em>Welcome to BUBBA hairdresser</em></h1>	
			</div>
			
			<div id="nav1" class="grid9">
				<ul id="nav2">
					<li><a href="index.html">HOME</a></li>
					<li><a href="about_us.html">ABOUT US</a></li>
					<li><a href="accessibility.html">ACCESSIBILITY</a></li>
					<li><a href="contact_us.php">CONTACT US</a></li>
					<li><a href="acknowledgements.html"> SOURCES USED</a></li>
					<li><a href="login.php">USER LOGIN</a></li>
					<li><a href="admin-login.php">ADMIN LOGIN</a></li>
					<li><a href="shoppingcart.php">PRODUCTS</a></li>
				</ul>
		</div>
			
		<div id="left-column" class="grid2">
			
				<div id="categories">
					<h1>Categories</h1>
						<ul id="cat1">
							<li><a href="http://cchairandbeauty.com/shop/index.php?main_page=index">Men Products</a></li>
							<li><a href="http://cchairandbeauty.com/shop/index.php?main_page=index">Women Products</a></li>
							<li><a href="http://cchairandbeauty.com/shop/index.php?main_page=index">Kid Products</a></li>
							<li><a href="http://cchairandbeauty.com/shop/index.php?main_page=products_all">All Products</a></li>
						</ul>
				
				<img src="images/left-column/1.png" class="image" alt="hair"/>
				<img src="images/left-column/4.png" class="image1" alt="hair"/>
				<img src="images/left-column/3.png" class="image1" alt="hair"/>
				<img src="images/left-column/winner.png" class="winner" alt="hair"/>
				
				</div>
				
			</div>
	
		<div id="time" class="grid7">
		
			<?php
				$hour = date("G");
				if ($hour >= 0 && $hour <= 11) 
					{
					echo "Good morning";
					} 
					
				else {
				
				if ($hour >= 12 && $hour <= 17) 
					{
					echo "Good afternoon";
					} 
					
				else 
					{
					echo "Good evening";
					}
				}

				$datenow = date("l, d F Y");
				$timenow = date("g:i a", time());
				print ", today is $datenow";
				print "<br>";
				print $timenow;
			?>
		</div>
			
		<div id="form" class="grid7">	
		
		<?php  
			$name = $_POST["name"];  
			$email = $_POST["email"];
			$radFind = $_POST["radFind"];
			$selRate = $_POST["selRate"];
			$enquiry  = $_POST["enquiry"]; 
		?>
				
		
		<form> 
				<fieldset>				
					<legend>Contact Us</legend>
	
					<p>
					Name: <?=$name?>
					</p>

					<p>
					E-mail address: <?=$email?>
					</p>
					
					<p>
					Find: <?=$radFind?>
					</p>
					
					<p>
					Rate: <?=$selRate?>
					</p>
						
					<p>
					Enquiry: <?=$enquiry?>
					</p>
		
					<?php  
					if (empty($name)) 
						{ 
							print "<br>Please fill in your name"; 
						}  
					
					if (empty($email)) 
						 { 
						   print "<br>Please enter an email"; 
						 } 

					if (empty($enquiry)) 
						{ 
							print "<br>Please fill in your enquiry"; 
						}  
					
					else print "<br>Thank you $name your comments will be useful \n"; 
					"<br>All correspondence will be sent to $email" ;
					?>

				</fieldset>
			</form>

		</div>	
		
			
			<div id="nav3" class="grid5">
				<p> "Need a CHANGE?</p> 
				<p>	wanna REFRESH yourself? </p>
				<p> go to BUBBA NOW ... </p>
				<p>and get 10% off your next haircut!"</p>
				
			</div>	
			
			<div id="footer">
			
				<div id="nav4" class="grid7">
					<ul id="nav6">
						<li><a href="index.html">HOME</a></li>
						<li><a href="about_us.html">ABOUT US</a></li>
						<li><a href="accessibility.html">ACCESSIBILITY</a></li>
						<li><a href="contact_us.php">CONTACT US</a></li>
						<li><a href="acknowledgements.html"> SOURCES USED</a></li>
						<li><a href="login.php">USER LOGIN</a></li>
						<li><a href="admin-login.php">ADMIN LOGIN</a></li>
						<li><a href="shoppingcart.php">PRODUCTS</a></li>
					</ul>
				</div>
				
				<div class="grid7" id="footer1">
					<img class="imagefooter" src="images/hair10.png" alt="hair"/>
					<img class="imagefooter" src="images/hair11.png" alt="hair"/>
					<img class="imagefooter" src="images/hair12.png" alt="hair"/>
					<img class="imagefooter" src="images/hair13.png" alt="hair"/>
					<p>BUBBA website designed by Linh Nguyen Duy - C3284175</p>
				</div>
			</div>
			
		</div>
			
		</body>
</html>