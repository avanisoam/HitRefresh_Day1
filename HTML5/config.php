<?php 
$servername = "sql208.epizy.com";
$username = "epiz_28869455";
$password = "LV4PjMkuoN6JR7i";
$dbname = "epiz_28869455_myDB";

$conn = new mysqli($servername , $username , $password , $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>