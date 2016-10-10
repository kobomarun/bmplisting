<?php
  include("template/header.php");
?>
<?php
  include("template/sidebar.php");
?>
  
  <div class="col-md-9 col-sm-8 col-xs-12">
    <!-- Category Column-->
    <div class="bmp-signup">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <section>      
                  <h1 class="entry-title"><span>Sign Up</span> </h1>
                  <hr width="990px;">
                  <?php if(validation_errors()) { ?>
                  <div data-alert class="alert alert-success" role="alert">
                    <strong><?php echo validation_errors(); ?></strong> 
                  </div>
                     <?php } ?>

                  <form action="registration" class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >        
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
                      <div class="col-md-8 col-sm-9">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="email" class="form-control" autofocus name="email" id="emailid" value="<?php echo set_value('email'); ?>" required />
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="password" id="password" placeholder="" value="" required />
                       </div>   
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="" value="" required />
                        </div>  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">First Name <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="fname" id="mem_name" placeholder="" value="<?php echo set_value('fname'); ?>" required />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Last Name <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="lname" id="mem_name" placeholder="" value="<?php echo set_value('lname'); ?>" required />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                          <label class="control-label col-sm-3">gender</label>
                          <div class="col-md-5"> 
                              <select class="form-control" name="gender">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                              </select>
                          </div>
                        </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Phone No. <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="tel" class="form-control" onkeydown="limit(this);" onkeyup="limit(this);" name="phone" value="<?php echo set_value('phone'); ?>" id ="demo" required />
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      function limit(element)
                        {
                            var max_chars = 10;

                            if(element.value.length > max_chars) {
                                element.value = element.value.substr(0, max_chars);
                            }
                        }
                    </script>
                
                    <div class="form-group">
                      <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted">By clicking Sign Up, you agree to our <a href="#">Terms & Conditions</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-offset-3 col-xs-10">
                        <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  
<?php
  include("template/footer.php");
?>