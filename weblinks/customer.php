<!DOCTYPE html>
<html lang="en">
        <head>
            <title><h1>login</h1></title>
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
			
			<div id = "background" class = "grid8">
			
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
						print "<br>";
					?>
			
					<form name="form1" method="GET" action="customer.php">
						<p>Find name starting with.. 
							<input name="letter" type="text" id="letter" size="3" maxlength="1">
						</p>
						
						<p>
							<input type="submit" name="Submit" value="Submit">
						</p>
					</form>
					<p>  <br>	</p>
				</div>
		
				<div class = "grid8">
				
					<?php
						//(1) Open the database connection 
						include "connection.php";
						
						//Get the Initial Letter passed 
						$initialLetter = $_GET["letter"]; 

						//Get the Initial Letter if one has been passed to this page
						$order = $_GET["order"]; 

						// create query using the initial letter from above and a % wildcard
						$query = "SELECT * FROM Customer WHERE Firstname LIKE '$initialLetter%'"; 

						//Use the ordering if an order has been passed
						if (!$order=="")
						{ 
						  $query = $query." order by $order ";
						} 

						// (3)Run the query-in this example there an error check to generate a 
						//message if there is a problem with the query
						$result = mysql_query($query) or die("Error in query: $query ".mysql_error());
						// (4) Display the results using a table this time 
						//First print the table and headers
						if (mysql_num_rows($result) > 0) { 
						// yes 
						// print them one after another 
						echo "<table cellpadding=10 border=1>";  
						
						//The href now includes the sort order AND the initial letter
						echo "<tr><td><a href='customer.php?order=CustomerID&letter=$initialLetter'>CustomerID</a></td>".
								 "<td><a href='customer.php?order=Firstname&letter=$initialLetter'>Firstname</a></td>".
								 "<td><a href='customer.php?order=Lastname&letter=$initialLetter'>Lastname</a></td>".
								 "<td><a href='customer.php?order=Sex&letter=$initialLetter'>Sex</a></td>".
								 "<td><a href='customer.php?order=Email&letter=$initialLetter'>Email</a></td>".
								 "<td><a href='customer.php?order=Username&letter=$initialLetter'>Username</a></td>".
								 "<td><a href='customer.php?order=Password&letter=$initialLetter'>Password</a></td></tr>";
								 
						while($row = mysql_fetch_array($result)) { 
							echo "<tr>"; 
							echo "<td>".$row['CustomerID']."</td>"; 
							echo "<td>".$row['Firstname']."</td>"; 
							echo "<td>".$row['Lastname']."</td>"; 
							echo "<td>".$row['Sex']."</td>"; 
							echo "<td>".$row['Email']."</td>"; 
							echo "<td>".$row['Username']."</td>"; 
							echo "<td>".$row['Password']."</td>"; 
							echo "</tr>"; 
							//print a change/delete link at the end of each row
							echo "<td><a href=customerChangeDelete.php?id=".$row[CustomerID].">Change/Delete</a></td>";  
							
						} 
						echo "</table>"; 
						} 
						else { 
							// no 
							// print status message 
							echo "No rows found!"; 
						}  

						?>
				</div>

				<div id="nav3" class="grid5">
					<p> "Need a CHANGE?</p> 
					<p>	wanna REFRESH yourself? </p>
					<p> go to BUBBA NOW ... </p>
					<p>and get 10% off your next haircut!"</p>
					
				</div>	
				
				<div id="footer">
					
					<div id="nav4" class="grid9">
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
						
					<div class="grid9" id="footer1">
						<img class="imagefooter" src="images/hair10.png" alt="hair"/>
						<img class="imagefooter" src="images/hair11.png" alt="hair"/>
						<img class="imagefooter" src="images/hair12.png" alt="hair"/>
						<img class="imagefooter" src="images/hair13.png" alt="hair"/>
						<p>BUBBA website designed by Linh Nguyen Duy - C3284175</p>
					</div>
				</div>
				
		
			</div>
		
		</div>
			
		</body>
</html>