<!DOCTYPE html>
<html lang="en">
        <head>
                <title><h1>BUBBA</h1></title>
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
				
				<p><a href="customer.php">Display</a> Customer Table</p>
				<p><a href="phpRegister.php">Register With Us</a></p>
			
			</div>
		
		
		<div id="form" class="grid7">
			
			<p><a href="customer.php">Display</a> Customer Table</p>
			
			<form> 			
				<fieldset>
					<legend>Register With Us, Why Not?</legend>
					
					<p>
					First name: <input type="text" name="Firstname" value = "<?=$Firstname?>" /> 
					</p>
					
					<p>
					Last name: <input type="text" name="Lastname" value = "<?=$Lastname?>" /> 
					</p>
					
					<p>
					  <input type="radio" name="Sex" value="Male" checked="checked" />Male
					  <input type="radio" name="Sex" value="Female" />Female
				   </p>

					<p>
					E-mail address: <input type="text" name="Email" value = "<?=$Email?>"  />
					</p>
						
					<p>
					User name: <input type="text" name="Username" value = "<?=$Username?>" />
					</p>
					
					<p>
					Password: <input type="password" name="Password" value = "<?=$Password?>" />
					</p>
		
					<p>
						<input type="submit" value="Register"  />
					</p>
					
					<?php
						//(1) Open the database connection 
						include "connection.php";
						
						//Get the Initial Letter passed 
						$Firstname = $_POST["Firstname"];  
						$Lastname = $_POST["Lastname"];
						$Sex = $_POST["Sex"];
						$Email = $_POST["Email"];
						$Username  = $_POST["Username"]; 
						$Password  = $_POST["Password"];

						//in this example there an error check to generate a 
						//message if there is a problem with the query
						if (empty($Firstname)) 
							{ 
								print "<br>Please fill in you first name"; 
							}  
							
						else if (empty($Lastname)) 
							{ 
								print "<br>Please fill in your last name"; 
							} 

						else if (empty($Email)) 
							 { 
							   print "<br>Please enter an email"; 
							 } 

						else if (strlen($Username)<6) 
							{ 
								print "<br>Username must be longer than 6"; 
							} 
						
						else if (strlen($Password)<6) 
							{ 
								print "<br>Password must be longer than 6"; 
							}  
							
						else 
						{
							// create query using the initial letter from above and a % wildcard
							$query = "INSERT INTO Customer (Firstname, Lastname, Sex, Username, Email, Password) VALUES ('$Firstname', '$Lastname', '$Sex', '$Username', '$Email', '$Password') ";  
							// (3)Run the query
							$result = mysql_query($query) or die("Error in query: $query ".mysql_error());
							print "Thank you ".$Firstname." ".$Lastname." your've successfully registered with us \n"; 
							print "<br>Your User name is $Username" ;
							print "<br>All latest news will be sent to $Email" ; 
						}
					
						// (5) print message with ID of inserted record    
						//header("Location: contact_us.php?"."CustomerID=". mysql_insert_id($connection));

						// (6) close connection 
						mysql_close($connection);     

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
