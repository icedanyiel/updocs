
<html>
<head>
<title>Upload Form</title>
</head>
<body>
<h2>Upload a file</h2>

<form action="" method="post">
  Title:<br>
  <input type="text" class="form-control" name="title" placeholder="name your file" required="" value="<?php echo !empty($file['title'])?$file['title']:''; ?>">
	  <?php echo form_error('title','<span class="help-block">','</span>'); ?>
  <br>
  Description:<br>
  <input type="text" class="form-control" name="description" placeholder="describe the content" required="" value="<?php echo !empty($file['description'])?$file['description']:''; ?>">
  <br>
  Enter tags (separated by commas):<br>
  <input type="text" class="form-control" name="tags" placeholder="your tags" required="" value="<?php echo !empty($file['tags'])?$file['tags']:''; ?>">
  <br>
  Select a file to upload (pdf|doc|docx):
</form>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" name="uplSubmit" class="btn-primary" value="Upload"/>

</form>

</body>
</html>