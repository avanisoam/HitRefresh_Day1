<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername , $username , $password , $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //$sql = "CREATE DATABASE myDB";
$sql = "INSERT INTO `user_register` (`Id`, `Name`, `Email`, `Website`, `Comments`, `Gender` , `Password` ) VALUES (NULL, '$Username' , '$EmailId', '$YourWebsite', '$YourComments', '$YourGender' , '$YourPassword')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("Location: http://localhost/github/HitRefresh_Day1/kursinama/www.myheritage.com/profile.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

mysqli_close($conn);

?>