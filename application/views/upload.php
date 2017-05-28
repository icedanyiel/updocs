<html>
<head>
<title>Upload</title>
</head>
<body>
<h2>Upload a file</h2>

<?php echo form_open_multipart('upload/do_upload');?>
  Title:<br>  
  <input type="text" class="form-control" name="title" placeholder="title" required="" value="<?php echo set_value('title'); ?>" >
    <?php echo form_error('title','<span class="help-block">','</span>'); ?>
  <br>
  Description:<br>
  <input type="text" class="form-control" name="description" placeholder="description" required="" value="<?php echo set_value('description'); ?>" >
   <br>
  Category:<br>
  <input type="text" class="form-control" name="category" placeholder="category" required="" value="<?php echo set_value('category'); ?>" >
   <br>
  Enter tags (separated by commas):<br>
  <input type="text" class="form-control" name="tags" placeholder="your tags" required="" value="<?php echo !empty($file['tags'])?$file['tags']:''; ?>">
 <br><br>

  Select a file to upload (pdf|doc|docx):
  <br>
  <?php echo $error;?>
  <input type="file" name="userfile" size="20" />
 <br><br>
      <div>
        <input type="submit" name="fileSubmit" class="btn-primary" value="Submit"/>
      </div>
 </form>

</body>