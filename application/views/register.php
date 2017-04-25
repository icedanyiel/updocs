<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
    <!-- validation -->
  <div class="grids">
    <div class="progressbar-heading grids-heading">
      <h2>User Registration</h2>
    </div>
    
    <div class="forms-grids">
      <div class="forms3">
      <div class="w3agile-validation w3ls-validation">
        <div class="panel panel-widget agile-validation register-form">
          <div class="validation-grids widget-shadow" data-example-id="basic-forms">  
            <div class="form-body form-body-info">
              <form action="" method="post">
                <div class="form-group valid-form">
                  <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
                  <?php echo form_error('name','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group has-feedback">
                  <input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                  <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
                  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                </div>
                  
                <div class="form-group">
                  <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
                </div>
              </form>
            </div>
            <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
          </div>
        </div>
      </div>
      <div class="clear"> </div>
      </div>
    </div>
  </div>
  <!-- //validation -->
</div>
</body>
</html>