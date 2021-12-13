<?php  

error_reporting(0);

//Database Configuration
$db_name 	= "dts_psb";
$host		= "10.0.0.97";
$username	= "admin";
$password   = "Evina_080102";

//make connection to database
$conn 		= mysqli_connect($host,$username,$password,$db_name) or die("Database connection error!");


?>