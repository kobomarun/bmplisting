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
                    <?php if($this->session->flashdata('thankyou')) {   ?>
                      <div class="alert alert-success" role="alert">
                         <?php echo $this->session->flashdata('thankyou'); ?>
                        <a href="#" class="close">&times;</a>
                      </div>
                      <?php } ?>

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