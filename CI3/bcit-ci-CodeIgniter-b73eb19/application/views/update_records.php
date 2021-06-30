<!Doctype html>
<html>
<head>
<title>Update Records</title>
</head>
<body>
<?php 
$i= 1;
foreach($data as $row){
?>
<form method="post">
<table border="1" cellpadding="5" cellspacing="5">
<tr>
<td><input type="text" name="name" value="<?php echo $row->Name; ?>" /></td>
</tr>
<tr>
<td><input type="text" name="email" value="<?php echo $row->Email; ?>" /></td>
</tr>
<tr>
<td><input type="text" name="mobile" value="<?php echo $row->Mobile; ?>" /></td>
</tr>
<tr>
<td><input type="submit" name="update" value="Update Records" /></td>
</tr>
</table> 

</form>


<?php } ?>

</body>
</html>