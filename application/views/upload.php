
<html>
<head>
<title>Upload Form</title>
</head>
<body>
<h2>Upload a file</h2>

<form>
  Title:<br>
  <input type="text" class="form-control" name="title" placeholder="name your file" required="" value="<?php echo !empty($file['title'])?$file['title']:''; ?>">
  <br>
  Description:<br>
  <input type="text" class="form-control" name="description" placeholder="describe the content" required="" value="<?php echo !empty($file['description'])?$file['description']:''; ?>">
</form>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="Upload" />

</form>

</body>
</html>