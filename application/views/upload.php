<html Doctype>
<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php //echo $error;?>

<?php echo form_open_multipart('Newspaper/uploadFile');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>