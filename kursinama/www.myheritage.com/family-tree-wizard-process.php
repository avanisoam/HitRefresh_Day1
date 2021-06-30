<!--?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $passwordErr = $passwordRepeatErr = "";
$name = $email = $gender = $comment = $website = $pasw = $paswrepeat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["pasw"])) {
    $passwordErr = "Please Enter the password";
  }
  else {
    $pasw = test_input($_POST["pasw"]);
  }

  if(empty($_POST["paswrepeat"])) {
    $passwordRepeatErr = "Password does not match!!";
  }
  else  {
    $paswrepeat = test_input($_POST["paswrepeat"]);

    if($_POST["pasw"] === $_POST["paswrepeat"]){
      $paswrepeat = "Password does not match!!";
    }
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?-->

<?php
session_start();
$_SESSION["username"]= $_POST["name"];
$_SESSION["email1"] = $_POST["email"];
$_SESSION["password1"] = $_POST["pasw"];
?> 

<?php
echo "<h2>Your Input:</h2>";
$Username = $_POST["name"];
echo $Username ;
echo "<br>";
$EmailId = $_POST["email"];
echo $EmailId ;
echo "<br>";
$YourWebsite = $_POST["website"];
echo $YourWebsite;
echo "<br>";
$YourComments = $_POST["comment"];
echo $YourComments;
echo "<br>";
$YourGender = $_POST["gender"];
echo $YourGender;
echo "<br>";
$YourPassword = $_POST["pasw"];
echo $YourPassword;
//echo "<br>";
//echo $paswrepeat;
?>

<?php 
include 'myDB.php';
?>