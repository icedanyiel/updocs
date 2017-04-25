<!DOCTYPE html>
<html lang="en">
<body>
<div class="container">
    <!-- validation -->
  <div class="grids">
    <div class="progressbar-heading grids-heading">
      <h2>LogIn</h2>
    </div>
    
    <div class="forms-grids">
      <div class="forms3">
      <div class="w3agile-validation w3ls-validation">
        <div class="panel panel-widget agile-validation register-form">
          <div class="validation-grids widget-shadow" data-example-id="basic-forms">  
            <div class="form-body form-body-info">
              <form action="" method="post">
                <div class="form-group has-feedback">
                  <input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                  <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
                  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                </div>
                  
                <div class="form-group">
                  <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
                </div>
              </form>
            </div>
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