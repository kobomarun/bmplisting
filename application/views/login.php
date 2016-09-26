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
                  <h1 class="entry-title"><span>Login to your account</span> </h1>
                  <hr width="990px;">
    
                      <?php if(isset($error)) {   ?>
                      <div class="alert alert-danger" role="alert">
                         <?php echo $error; ?>
                        <a href="#" class="close">&times;</a>
                      </div>
                       <?php } ?>

                          <?php if($this->session->flashdata('logout')) {   ?>
                      <div class="alert alert-success" role="alert">
                         <?php echo $this->session->flashdata('logout'); ?>
                        <a href="#" class="close">&times;</a>
                      </div>
                      <?php } ?>
                  <?php if($this->session->flashdata('notLoggedIn')) { ?>
                  <div data-alert class="alert alert-success" role="alert">
                    <strong><?php echo $this->session->flashdata('notLoggedIn'); ?></strong> 
                    <a href="#" class="close">&times;</a>
                  </div>
                     <?php } ?>

                     <?php if($this->session->flashdata('success')) { ?>
                  <div data-alert class="alert alert-success" role="alert">
                    <strong><?php echo $this->session->flashdata('success'); ?></strong> 
                    <a href="#" class="close">&times;</a>
                  </div>
                     <?php } ?>

                  <form action="<?php echo base_url(); ?>authentication/login" class="form-horizontal" method="post" />        
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3">Email Addresss</label>
                      <div class="col-md-8 col-sm-5">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="email" class="form-control" name="email" value="<?php echo set_value(' email '); ?>">
                        </div>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label class="control-label col-sm-3">Password</label>
                      <div class="col-md-5 col-sm-2">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" class="form-control" name="password" id="password" value="">
                       </div>   
                      </div>
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