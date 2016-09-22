<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMPListing</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/bmp-www.css" rel="stylesheet">   
    <link href="css/bmp-slider.css" rel="stylesheet"> 
    <script type="text/javascript" src="js/jssor.slider-21.1.5.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
  <div class="bmplisting">
    <div class="row">
      <div class="container-fluid">
        <header>
          <div class="col-md-2 col-sm-2 col-xs-12">
            <img src="img/logo.png" class="logo img-responsive" />
            <div class="search-by">Search by</div>
            <div class="cat-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoty <i class="glyphicon glyphicon-triangle-bottom"></i></div>
            <ul class="dropdown-menu">
              <li><a href="#">Materials</a></li>
              <li><a href="#">Blocks</a></li>
              <li><a href="#">Paints</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Another Category</a></li>
            </ul>
          </div>
          
          <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="bmp-header-search">
              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Materials</a></li>
                    <li><a href="#">Blocks</a></li>
                    <li><a href="#">Paints</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Another Category</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <input type="text" class="form-control" placeholder="Enter your search terms" aria-label="Enter your Search terms">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                      </span>
              </div><!-- /input-group -->
            </div>
            <div class="bmp-menu hidden-xs">
              <ul>
                <li><a href="#">Are you a Dealer? </a></li>
                <li><a href="#">|&nbsp; Business Directory </a></li>
                <li><a href="">|&nbsp; Exchange Rates </a></li>
                <li><a href="">|&nbsp; Your Requisition </a></li>
                <li><a href="">|&nbsp; DIY </a></li>
                <li><a href="#">| &nbsp;Blog </a></li>
                <li><a href="#">| &nbsp; My Account </a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-3 hidden-xs">
            <div class="bmp-header-right">
              <img src="http://placehold.it/270x40" class="img-responsive"/>
            </div>
            <div class="bmp-menu-r">
              <ul>
                <li><a href="#">Sign In </a></li>
                <li>|&nbsp; <a href="#">Sign up</a> </li>
                <li>|&nbsp; <a href="#">Wish List</a> &nbsp; | &nbsp;<i class="glyphicon glyphicon-shopping-cart"></i></li>
              </ul>
          </div>
        </div>
       </header>
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
              <li><i class="glyphicon glyphicon-user"></i> Hi, RASHEED</li>
              <li> <img src="img/line.png" alt=""> </li>
              <li><a href="">Building Calculator</a></li>
              <li><a href="">&nbsp;&nbsp;Price Tracker</a></li>
              <li><a href="">List Your Products</a></li>
              <li><a href="">Looking for a Tradesman?</a></li>
            </ul>
          </div>
         </div>
        </div> 
      </div>
      <div class="row">
        <div class="container-fluid">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <!-- sidebar Column-->
          <aside>
            <div class="bmp-aside-cat">
              <div class="cat-header">
                MENU
              </div>
              <ul>
                <li><a href="editprofile.html"><i class="glyphicon glyphicon-list-alt"></i> Edit My Profile</a></li>
                <li><a href="members.html"><i class="glyphicon glyphicon-list-alt"></i> My Wishlist</a></li>
                <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Recommended Dealers</a></li>
                <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Requisition Orders</a></li>
              </ul>
            
            </div>
            <div class="bmp-aside-latest">
              <div class="post-header">
                Latest
              </div>
              <div class="row ">
                <a href="#">
                <div class="col-sm-5 ">
                  <img src="img/blocks.jpeg" class="img-responsive"/>
                </div>
                <div class="col-sm-7 text">
                  <div class="bmp-prod-cat">Sub-category name</div>
                  <div class="bmp-prod-name">Product name</div>
                  <div class="bmp-prod-price">₦1200</div>
                </div>
                </a>
              </div>
              <div class="divider"></div>

              <div class="row">
                <a href="#">
                <div class="col-sm-5 ">
                 <img src="img/iron.jpeg" class="img-responsive"/>
                </div>
                <div class="col-sm-7 text">
                  <div class="bmp-prod-cat">Sub-category name</div>
                  <div class="bmp-prod-name">Product name</div>
                  <div class="bmp-prod-price">₦1200</div>
                </div>
                </a>
              </div>
              <div class="divider"></div>

              <div class="row">
                <a href="#">
                <div class="col-sm-5 ">
                 <img src="img/pan.jpeg" class="img-responsive"/>
                </div>
                <div class="col-sm-7 text">
                  <div class="bmp-prod-cat">Sub-category name</div>
                  <div class="bmp-prod-name">Product name</div>
                  <div class="bmp-prod-price">₦1200</div>
                </div>
                </a>
              </div>
              <div class="divider"></div>

              <div class="row">
                <a href="#">
                <div class="col-sm-5 ">
                  <img src="img/branite.jpeg" class="img-responsive"/>
                </div>
                <div class="col-sm-7 text">
                  <div class="bmp-prod-cat">Sub-category name</div>
                  <div class="bmp-prod-name">Product name</div>
                  <div class="bmp-prod-price">₦1200</div>
                </div>
                </a>
              </div>
            </div>
          </aside>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <!-- Members Column-->
          <div class="bmp-signup">
            <div class="row">
              <div class="col-sm-12">
                <div class="container">
                  <h1>My Wishlist</h1>
                 <table class="table table-hover absd">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                          $i = 1;
                          if($this->cart->contents()!=null){
                              foreach ($this->cart->contents() as $items){ 
                    ?>
                    
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $items['name']; ?></td>
                        <td><?php echo $items['price']; ?></td>
                          </div>
                        <td><a href="<?php echo base_url(); ?>wishlist/remove/<?php echo $items['rowid']; ?> "data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
                      </tr>
                    <?php $i++; } }else{ ?>
                      <tr>
                        <td colspan="4">No result found</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <footer>
        <div class="row">
          <div class="container">
            <div class="col-sm-4 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Menu</h2>
                <ul>
                  <li><a href="#"> About Us</li>
                  <li><a href="#">Building Calculators </li>
                  <li><a href="#">Wish List</li>
                  <li><a href="#">Blog </li>
                  <li><a href="#">List Your Products</li>
                  <li><a href="#">Price Comparison </li>
                  <li><a href="#">Careers </li>
                  <li><a href="#">Contact Us </li>
                  <li><a href="#">Your Account </a></li>
                </ul>
              </div>
            </div> 

            <div class="col-sm-4 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Information</h2>
                <ul>
                  <li><a href="#">Advertise on BMPList</li>
                  <li><a href="#">Submit Requisition Order</li>
                  <li><a href="#">Business Training</li>
                  <li><a href="#">Price Comparison</li>
                  <li><a href="#">Search for a Tradesman</li>
                  <li><a href="#">Give a feedback </li>
                  <li><a href="#">Careers </li>
                  <li><a href="#">Contact Us </a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-4 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Newsletter</h2>
                <div class="">
                  <p>Subscribe to Newsletter</p>
                  <form action="" method="post">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-envelope"></i></button>
                      </span>
                      <input type="text" class="form-control" placeholder="Search your@email.com">
                    </div><br />
                    <div>
                     <input type="submit" value="Subscribe Now!" class="btns btn-large" />
                  </div>
                  </form>
                </div> 
                <h2 class="header">Follow us</h2>
                <ul class="footer-social">
                  <li><a href="#"><span class="icon icon-bmp-facebook"></i> </li>
                  <li><a href="#"><i class="icon icon-bmp-twitter"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-pinterest-p"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-gplus"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-youtube-play"></i></li>
                </ul>   
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
            <div class="row">
              <div class="col-sm-12 terms">
                <ul>
                  <li><a href="#">Terms & Condition</li>
                  <li><a href="#">Privacy Policy</li>
                  <li><a href="#">Cookies</li>
                  <li><a href="#">Service Terms</li>
                  <li><a href="#">Internet Advertising Terms</li>
                  <li><a href="#">FAQs</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="bmp-copyrights text-center">
                <p>© 2016, BMPList.com. All rights reserved.</p>
              </div>
            </div>
      </footer>
    </div>
  </div>
 </div>
    
<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
