<!Doctype html>
<html>
<head>
<title>Student Login Form</title>
</head>
<body>
<form method="post">
<table width="600" border="2" cellpadding="5" cellspacing="5">
<tr>
<td><?php echo @$error; ?></td>
</tr>
<tr>
<td>Enter your Email</td>
<td><input type="text" name="email" />
</tr>
<td>Enter your Password</td>
<td><input type="text" name="pass" />
</tr>

<tr>
<td><input type="submit" name="login" value="Login" />
</tr>
</table>
</form>
</body>
</html>