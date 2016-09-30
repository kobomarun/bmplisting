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
                <section class="bmp-dealers">    
                <div class="bmp-dealers-title">
                  <?php 
                   if($this->uri->segment(2)== 'exchange') {
                    echo 'Exchange Rates';
                   }
                   if($this->uri->segment(2)=='directory') {
                    echo 'Busisness Directory';
                    } 
                  ?>

                </div>  
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </section>
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