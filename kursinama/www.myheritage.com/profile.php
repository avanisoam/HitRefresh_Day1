<html>
<head></head>
<body>
<?php 
session_start();
print_r($_SESSION);
echo "Hello " .$_SESSION['login_user'];
?>

<h2><a href ="logout.php">Sign Out</a></h2>
</body>
</html>