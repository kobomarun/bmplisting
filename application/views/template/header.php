<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buiding Materials</title>
  <!-- jQuery Version 1.11.1 -->
  <script src="<?php echo base_url(); ?>js/jquery.js"></script>
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>css/bmp-www.css" rel="stylesheet">     
  <link href="<?php echo base_url(); ?>css/bmp-slider.css" rel="stylesheet"> 
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jssor.slider-21.1.5.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/slider.js"></script>
  <script src="<?php echo base_url(); ?>dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/sweetalert.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <?php
      $this->db->order_by("name", "asc");
      $query =  $this->db->get('category')->result();
    ?>
  <div class="bmplisting">
    <div class="row">
      <div class="container-fluid">
        <header>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>img/logo.png" class="logo img-responsive" />
            </a>
            <div class="search-by">Search by</div>
            <div class="cat-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoty <i class="glyphicon glyphicon-triangle-bottom"></i></div>
            <ul class="dropdown-menu">
              <?php foreach($query as $cat) { ?>
            <li>
              <a href="<?php echo base_url(); ?>category/listing/<?php echo $cat->id; ?>/<?php echo preg_replace('/\s+/', '', $cat->name) ?>">
                <?php echo $cat->name; ?>
              </a>
            </li>
            <?php } ?>
            </ul>
          </div>
          
          <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="bmp-header-search">
             <?php if($this->session->flashdata('error')) { ?>
                  <p align="center" style="color:red">
                    <?php echo $this->session->flashdata('error'); ?>
                  </p>
            <?php } ?>
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                   <?php foreach($query as $cat) { ?>
                  <li>
                    <a href="<?php echo base_url(); ?>listing/listing/<?php echo $cat->id; ?>/<?php echo preg_replace('/\s+/', '', $cat->name) ?>">
                      <?php echo $cat->name; ?>
                    </a>
                  </li>
      <?php } ?>
                  </ul>


                  <?php echo form_open('products/search'); ?>
                </div><!-- /btn-group -->
                <input type="text" class="form-control" name="search_item" placeholder="Enter your search terms" value="<?php echo set_value('search_item'); ?>" aria-label="Enter your Search terms">
                <span class="input-group-btn">
                        <button class="btn btn-default" name="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
              </div><!-- /input-group -->
            </div>
            <?php echo form_close(); ?>
            <div class="bmp-menu hidden-xs">
              <ul>
                <li><a href="<?php echo base_url();?>dealers">Are you a Dealer? </a></li>
                <li><a href="<?php echo base_url();?>pages/directory">|&nbsp; Business Directory </a></li>
                <li><a href="<?php echo base_url();?>pages/exchange">|&nbsp; Exchange Rates </a></li>
                <li><a href="<?php echo base_url();?>">|&nbsp; Your Requisition </a></li>
                <li><a href="<?php echo base_url();?>">|&nbsp; DIY </a></li>
                <li><a href="<?php echo base_url();?>pages/Blog">| &nbsp;Blog </a></li>
                <li><a href="<?php echo base_url();?>user">| &nbsp; My Account </a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-3 hidden-xs">
            <div class="bmp-header-right">
              <img src="http://placehold.it/270x40" class="img-responsive"/>
            </div>
             <?php 
                if(!$this->session->userdata('isLoggedin')) {
               ?>
            <div class="bmp-menu-r">
              <ul>
                <li data-toggle="modal" data-target="#myModal"><a href="#">Sign In </a></li>
                <li>|&nbsp; <a href="<?php echo base_url(); ?>registration">Sign up</a> </li>
                <li>|&nbsp; <a href="<?php echo base_url(); ?>wishlist">WishList (<?php  echo count($this->cart->contents()); ?>)</a> &nbsp; | &nbsp;<i class="glyphicon glyphicon-shopping-cart"></i></li>
              </ul>
          </div>
          <?php } else { ?>
          <div class="bmp-menu-r">
              <ul>
                <li data-toggle="modal" data-target="#myModal"><a href="<?php echo base_url(); ?>authentication/logout">Logout </a></li>
                <li>|&nbsp; <a href="<?php echo base_url(); ?>wishlist">Wish List(0)</a> &nbsp; | &nbsp;<i class="glyphicon glyphicon-shopping-cart"></i></li>
              </ul>
          </div>
          <?php } ?>
        </div>
       </header>
       <?php 
          if($this->uri->segment(1) === "home") { 
            include("homeMenu.php");
          } else {
        ?>

       <div class="category">Hell</div>
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
               ?>
             </li>
            <li> <img src="<?php echo base_url(); ?>img/line.png" alt=""> </li>
            <li><a href="<?php echo base_url(); ?>calculator">Building Calculator</a></li>
            <li><a href="<?php echo base_url(); ?>">&nbsp;&nbsp;Price Tracker</a></li>
            <li><a href="<?php echo base_url(); ?>">List Your Products</a></li>
            <li><a href="<?php echo base_url(); ?>">Looking for a Tradesman?</a></li>
          </ul>
        </div>
       </div>
      </div> 
    </div>
  <?php } ?> 
