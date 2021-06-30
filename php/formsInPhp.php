<!DOCTYPE HTML>  
<html>
<head>
<script>
function validationcheck() {
  var Name = document.forms["myForm"]["name"];
  var Email = document.forms["myForm"]["email"];
  var Password = document.forms["myForm"]["pasw"];
  var Reppassword = document.forms["myForm"]["paswrepeat"];
  var Website = document.forms["myForm"]["website"];
  var Comments = document.forms["myForm"]["comment"];
  var Gender = document.forms["myForm"]["gender"];

  if (Name.value == "") {
      //window.alert("Please enter your name.");
      document.getElementById("name1").innerHTML = "Please enter your name";
      //document.write("Please enter your name");
      Name.focus();
      return false;
   }

   if (Email.value == "") {
      //window.alert("Please enter your email.");
      document.getElementById("email1").innerHTML = "Please enter your email address";
      Email.focus();
      return false;
   }

   if (Password.value == "") {
      //window.alert("Please enter your password.");
      document.getElementById("pasw1").innerHTML = "Please enter your Password";
      Password.focus();
      return false;
   }

   if (Reppassword.value == "") {
      //window.alert("Please enter your password.");
      document.getElementById("paswrepeat1").innerHTML = "Please Re-enter your password";
      Reppassword.focus();
      return false;
   }

   if (Website.value == "") {
      //window.alert("Please enter your website.");
      document.getElementById("website1").innerHTML = "Please enter your website";
      Website.focus();
      return false;
   }

   if (Comments.value == "") {
      //window.alert("Please enter your comments.");
      document.getElementById("comment1").innerHTML = "Please enter your comments";
      Comments.focus();
      return false;
   }

   if (Gender.value == "") {
      //window.alert("Please enter your gender.");
      document.getElementById("gender1").innerHTML = "Please enter your gender";
      gender.focus();
      return false;
   }

   return true;
}
</script>
</head>
<body>  

<!--?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $passwordErr = $passwordRepeatErr = "";
$name = $email = $gender = $comment = $website = $pasw = $paswrepeat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if($_POST["submit"]){
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
    $passwordErr = "Password is required";
  }
  else {
    $pasw = test_input($_POST["pasw"]);
  }

  if(empty($_POST["paswrepeat"])) {
    $passwordRepeatErr = "Re- Enter the Password";
  }

  if($_POST["paswrepeat"] !== $_POST["pasw"]){
    $passwordRepeatErr = "Password does not match!!";
  
  }
  else  {
    $paswrepeat = $pasw;
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

<h2>Sign Up       Or</h2><button type="button"><a href="http://localhost/github/HitRefresh_Day1/kursinama/www.myheritage.com/loginpage.php">Login</a></button> 
<p><span class="error">* required field</span></p>
<form method="POST" action="http://localhost/github/HitRefresh_Day1/kursinama/www.myheritage.com/family-tree-wizard-process.php" name = "myForm" onsubmit = "return validationcheck()">  
  Name: <input type="text" name="name" id= "name">
  <span class="error" id="name1">* <?php //echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error" id ="email1">* <?php //echo $emailErr;?></span>
  <br><br>
  Password: <input type="text" name="pasw" >
  <span class="error" id="pasw1">* <?php //echo $passwordErr;?></span>
  <br><br>
  Re-Enter Password: <input type="text" name="paswrepeat" >
  <span class="error" id="paswrepeat1">* <?php //echo $passwordRepeatErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error" id="website1"><?php //echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" ></textarea>
  <span class="error" id = "comment1"><?php //echo $websiteErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error" id="gender1">* <?php //echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit" />  
</form>


<!--?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $pasw;
echo "<br>";
echo $paswrepeat;
?-->




</body>
</html>