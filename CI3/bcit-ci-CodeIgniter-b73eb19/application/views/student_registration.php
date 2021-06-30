<!Doctype html>
<html>
    <head>
        <title>Student Registration Form</title>
    </head>
    <body>

    <form method="POST">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
        <tr>
        <td><?php echo @$error; ?></td>
        </tr>
            <tr>
                <td>Enter your Name</td>
                <td><input type="text" name = "name"></td>
            </tr>

            <tr>
                <td>Enter your Email</td>
                <td><input type="text" name = "email"></td>
            </tr>

            <tr>
                <td>Enter your Password</td>
                <td><input type="text" name = "pass"></td>
            </tr>

            <tr>
                <td>Enter your Mobile No.</td>
                <td><input type="text" name = "mobile"></td>
            </tr>

            <tr>
    <td>Select Your Course </td>
    <td>
	<select name="course">
		<option value="">Select Course</option>
		<option>PHP</option>
		<option>Java</option>
		<option>Wordpress</option>
	</select>
	</td>
  </tr>

            <tr>
                
                <td><input type="submit" name = "register" value="Register Me" /></td>
            </tr>
</table>
</form>
</body>
</html>
