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
                  <h1 class="entry-title"><span>Recover</span> </h1>
                  <hr width="990px;">
                  <?php 
                      if(isset($errorMessage)){
                 ?>
                  <div data-alert class="alert alert-success" role="alert">
                    <strong><?php echo $errorMessage; ?></strong> 
                  </div>
                  <?php } ?>
                  
                  <?php if(validation_errors()) { ?>
                  <div data-alert class="alert alert-error" role="alert">
                    <strong><?php echo validation_errors(); ?></strong> 
                  </div>
                     <?php } ?>

                  <form action="<?php echo base_url(); ?>user/retrieve_password" class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >        
                    
                    <div class="form-group">
                      <label class="control-label col-sm-3">Email Address <span class="text-danger">*</span></label>
                      <div class="col-md-8 col-sm-9">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="email" placeholder="Enter email to recover password" class="form-control" name="email" id="emailid" value="<?php echo set_value('email'); ?>" required />
                        </div>
                      </div>
                    </div>
    
                    <div class="form-group">
                      <div class="col-xs-offset-3 col-xs-10">
                        <input name="Submit" type="submit" value="Recover Password" class="btn btn-primary">
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