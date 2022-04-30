<?php
include("functions.php");

$host ="localhost";
$db_user = " "; // Database Username
$db_pass = " "; // Database Password
$db_name = " "; // Database Name
$url = "http://localhost/anything";  // Enter Your Project URL
define('SITEURL',$url);

$mysqli = mysqli_connect($host,$db_user,$db_pass,$db_name);


?>