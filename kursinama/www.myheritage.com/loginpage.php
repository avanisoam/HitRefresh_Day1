<?php 
//session_start();
//print_r($_SESSION);
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<form method="POST" action="loginprocess.php" name="loginForm">
Email Address: <input type="text" name="Email" required>
<br><br>
Your Password: <input type="text" name="Passwords" required>
<br><br>
<input type="submit" name="submit" value="Login"/>

<?php 
if(isset($_REQUEST["err"]))
	$msg="Invalid Email or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
	
echo $msg;
}
?>

</p>


</form>
</body>
</html>





