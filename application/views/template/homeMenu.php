<div class="bmp-slider">
<div id="jssor_1" style="  width: 980px; height: 250px; overflow: hidden; visibility: hidden;">
  <!-- Loading Screen -->
  <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
      <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
      <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
  </div>
  <div data-u="slides" class="sliderimg">
      <div data-b="0" data-p="170.00" data-po="80% 55%" style="display: none;">
          <img data-u="image" src="<?php echo base_url(); ?>img/01.jpg" class="img-responsive"/>
      </div>
      <div data-b="1" data-p="170.00" style="display: none;">
          <img data-u="image" src="<?php echo base_url(); ?>img/02.jpg" />
      </div>
      <div data-b="2" data-p="170.00" style="display: none;">
          <img data-u="image" src="<?php echo base_url(); ?>img/04.jpg" />
      </div>  
  </div>
  <!-- Bullet Navigator -->
  <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
      <!-- bullet navigator item prototype -->
      <div data-u="prototype" style="width:16px;height:16px;"></div>
  </div>
  <!-- Arrow Navigator -->
  <span data-u="arrowleft" class="jssora22l hidden-xs" style="top:0px;left:10px;width:40px;height:58px;" data-autocenter="2"></span>
  <span data-u="arrowright" class="jssora22r hidden-xs" style="top:0px;right:10px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
<script>
  jssor_1_slider_init();
</script>
</div>
</div>
   </div>
  <div class="row">
    <div class="container-fluid">
      <div class="bmp-intro">
        <div class="row">
         <div class="">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <ul>
              <li><i class="glyphicon glyphicon-user"></i> Hi, 
               <?php 
                if($this->session->userdata('isLoggedin')) {
                 echo $this->session->userdata('fname'); 
               } else echo "Guest" ;
               ?><span class="visible-xs"><a href="<?php echo base_url(); ?>registration">Register</a> &nbsp;| &nbsp; <a href="<?php echo base_url(); ?>authentication/login">Login</a></span>
             </li>
              <li class="hidden-xs"> <img src="<?php echo base_url(); ?>img/line.png" alt=""> </li>
            <li class="hidden-xs"><a href="<?php echo base_url(); ?>calculator">Building Calculator</a></li>
            <li align="left" class="hidden-xs"><a href="<?php echo base_url(); ?>">&nbsp;&nbsp;Price Tracker</a></li>
            <li class="hidden-xs"><a href="<?php echo base_url(); ?>">List Your Products</a></li>
            <li class="hidden-xs"><a href="<?php echo base_url(); ?>">Looking for a Tradesman?</a></li>
            </ul>
          </div>
         </div>
        </div> 
      </div>
