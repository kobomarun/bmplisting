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

                  <form action="registration/signup" class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >        
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
                      <div class="col-md-8 col-sm-9">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="email" class="form-control" name="email" id="emailid" value="">
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
                       </div>   
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
                        </div>  
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">First Name <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="fname" id="mem_name" placeholder="Enter your Name here" value="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Last Name <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="lname" id="mem_name" placeholder="Enter your Name here" value="">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Phone No. <span class="text-danger">*</span></label>
                      <div class="col-md-5 col-sm-8">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="text" class="form-control" name="phone" id="contactnum" placeholder="Enter your Primary contact no." value="">
                        </div>
                      </div>
                    </div>
                
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