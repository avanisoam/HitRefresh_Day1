<!Doctype html>
<html>
<head>
<title>Image upload Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php echo @$error; ?>
<?php echo form_open_multipart('ImageUpload_Controller/upload'); ?>
<?php echo "<input type='file' name='profile_pic' size='20'/>"; ?>
<?php echo "<input type='submit' name='submit' value='Upload'/>"; ?>
<?php echo "</form>"?>
</body>
</html>
