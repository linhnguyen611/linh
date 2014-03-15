<?php
session_start();

$user_name = $_SESSION["authenticatedUser"];
$_SESSION["message"] =  "User $user_name has logged out";

session_unregister("authenticatedUser");

// Relocate back to the login page
header("Location: admin-login.php");
?> 

