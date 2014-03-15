<?php
//Start session
	session_start();
	
// (1) Use include to database connection and select database
require_once('connection.php');
//print "<h2>connection</h2> " . $connection;
// (2) Collect data from form and save in variables

$Username=$_POST["Username"];
$Password=$_POST["Password"];

// (3) Create query of the form below to search the user table
$query = "SELECT * FROM Customer WHERE Username='$Username' AND  Password='$Password'";
//print "<h2>$query</h2> " . $query;
// (3) Run query through connection
$result = mysql_query($query) or die("Error in query: $query ".mysql_error());

// (4) Check result of query using code below
// if rows found set authenticated user to the user name entered 
if (mysql_num_rows($result) > 0) { 
	$_SESSION["authenticatedUser"] = $Username;
	$_SESSION["is_loggedin"] = true;
	// Relocate to the logged-in page
	header("Location: loggedon.php");
} 
else
// login failed redirect back to login page with error message
{
	$_SESSION["is_loggedin"] = false;

$_SESSION["message"] = "Could not connect as $Username " ;
header("Location: login.php");
}
?>