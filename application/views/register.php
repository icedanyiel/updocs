<h2>User Registration</h2>
  <div class="forms-grids">
    <form action="" method="post">
        <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
        <?php echo form_error('name','<span class="help-block">','</span>'); ?>
      <div>
        <input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
        <?php echo form_error('email','<span class="help-block">','</span>'); ?>
      </div> 
      <div>
        <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
        <?php echo form_error('password','<span class="help-block">','</span>'); ?>
      </div>
      <div>
        <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
      </div>
    </form>
  </div>
<p>Already have an account? <a href="<?php echo base_url(); ?>login">Login here</a></p>
          