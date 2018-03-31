<?php


function Connect()
{
 $dbhost = "localhost";
 $dbuser = "stude120_admin";
 $dbpass = "admin";
 $dbname = "stude120_SENGGroup";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>