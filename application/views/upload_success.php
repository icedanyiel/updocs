<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>


Your file <?php echo $this->upload->data('file_name'); ?> has been uploaded.

<p><?php echo anchor('upload', 'Upload Another File'); ?> or <?php echo anchor('myaccount', 'enter My Account ');?></p>

</body>