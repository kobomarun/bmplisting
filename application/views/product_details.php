<?php
  include("template/header.php");
?>
<div class="row"> 
  <div class="container-fluid">
    <?php include("template/sidebar.php"); ?>
    <?php if(isset($error)) {   ?>
    <div class="alert alert-danger" role="alert">
       <?php echo $error; ?>
      <a href="#" class="close">&times;</a>
    </div>
     <?php } ?>
    <div class="col-md-9 col-sm-8 col-xs-12">
      <?php foreach($products as $product) { ?>
          <!-- Product Column-->
          <div class="bmp-product">
            <div class="row">
              <!--Product Image-->
              <div class="col-md-5 col-sm-5 col-xs-12">
                <img name="preview" src="<?php echo base_url(); ?>img/<?php echo $product->img; ?>" alt="" class="img-responsive">
                <div class="img-thumb">
                  <ul>
                    <li><img onmouseover="preview.src=img1.src" name="img1" src="<?php echo base_url(); ?>img/<?php echo $product->img; ?>" alt=""></li>
                    <li><img onmouseover="preview.src=img2.src" name="img2" src="<?php echo base_url(); ?>img/04.jpg" alt=""></li>
                    <li><img onmouseover="preview.src=img3.src" name="img3" src="<?php echo base_url(); ?>img/01.jpg" alt=""></li>
                    <li><img src="http://placehold.it/20x20" alt=""></li>
                  </ul>
                </div>
              </div>
            <!-- Product Description -->
              <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="bmp-product-container">
                  <div class="bmp-product-title">
                     <?php echo $product->name; ?>
                   </div>
                   <p>
                    <a>
                      SKU: <?php echo $product->sku; ?>
                    </a>
                  </p>
                  <div class="bmp-product-detail">
                    <h2 class="movetop">QUICK OVERVIEW</h2>
                    <div class="horiz"></div>
                    <h3>Product Details</h3>
                    <p> <?php echo $product->overview; ?></p>

                    <div class="prod-price">Guide Price: ₦ <?php echo $product->price; ?></div>
                    <p class="place">Last updated on <?php echo date("F j, Y"); ?>. Price is based on  <?php echo $product->market; ?>. </p>
                    <div class="bmp-related-wishlist">
                      <div class="bmp-wishlist-btn-container">
                        <a href="#">
                          <button class="bmp-wishlist-btn">ADD TO REQUISITION</button>
                        </a>
                      </div>

                      <div class="bmp-wishlist-btn-container">
                        <a href="#">
                          <button class="bmp-wishlist-btn">COMPARE PRICES</button>
                        </a>
                      </div>
                    </div>
                    <div class="bmp-soc">
                      <h4>SHARE</h4>
                      <ul class="">
                      <li>
                        <a href="http://www.facebook.com/share.php?u=<?php echo current_url(); ?>&title=<?php echo $product->name; ?>" target="_blank">
                          <img src="<?php echo base_url(); ?>img/fb.png" alt="" class="img-responsive soc" />
                        </a>
                      </li>
                      <li>
                        <a href="http://twitter.com/intent/tweet?status=<?php echo $product->name; ?>+<?php echo current_url(); ?>" target="_blank"><img src="<?php echo base_url(); ?>img/tw.png" alt="" class="img-responsive soc"/>
                        </a>
                      </li>
                      <li>
                        <a href="http://pinterest.com/pin/create/bookmarklet/?url=<?php echo current_url(); ?>&is_video=false&description=<?php echo $product->name; ?>" target="_blank">
                        <img src="<?php echo base_url(); ?>img/pint.png" alt="" class="img-responsive soc"/>
                        </a>
                      </li>
                      <li>
                        <a href="https://plus.google.com/share?url=<?php echo current_url(); ?>" target="_blank">
                          <img src="<?php echo base_url(); ?>img/gplus.png" alt="" class="img-responsive soc"/>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="<?php echo base_url(); ?>img/ins.png" alt="" class="img-responsive soc" />
                        </a>
                      </li>
                    </ul>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <!-- Ads-->
            <div class="row">
              <div class="col-sm-6 col-xs-11"> 
                <div class="prod-ads">
                  <img src="http://placehold.it/400X130" alt="" class="img">
                </div>
              </div>
              <div class="col-sm-6 col-xs-11"> 
                <div class="prod-ads">
                  <img src="http://placehold.it/400x130" alt="" class="img">
                </div>
              </div>
            </div>
            <!--end of ads-->

            <div class="prod-recommended">
              <div class="bmp-product-tabs">
                <ul>
                  <li class="tab-header"><a style="color:red;"> Recommended Dealers For This Item</a></li>
                  <li>
                    <div class="prod-filter hidden-xs">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Filter by State
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="#">Default</a></li>
                          <?php foreach($states as $state) { ?>
                          <li><a href="#"><?php echo $state->name; ?></a></li>
                          <?php } ?>
                        </ul>
                      </div>
                  </li>
                </ul>
              </div> 
              <div class="prod-recommended-container">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="block-one">
                      <?php if(!$dealers1) { ?>
                      <p>No dealer found for this product</p>
                      <a href="#"> 
                        <button class="btn btn-primary">Recommend a dealer now</button>
                       </a>
                      <?php } foreach($dealers1 as $dealer) { ?>
                      <h3>dealer's details</h3>
                      <table>
                        <tbody>
                          <tr>
                            <th>Buz. Name</th>
                            <td><?php echo $dealer->name; ?></td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td><?php echo $dealer->address; ?></td>
                          </tr>
                          <tr>
                            <th>Telephone</th>
                            <td><?php echo $dealer->phone; ?></td>
                          </tr>
                          <tr>
                            <th>State</th>
                            <td><?php echo $dealer->state; ?></td>
                          </tr>
                          <tr>
                            <th>Selling Price</th>
                            <td style="color:red;"> ₦<?php echo number_format($dealer->price,2); ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <div>
                       <a href="#"> 
                        <button class="review-btn">Review this dealer</button>
                       </a>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="line-divider"></div>
                  </div>
                  <div class="col-sm-5">
                    <?php if(!$dealers2) { ?>
                      <p>No dealer found for this product</p>
                      <a href="#"> 
                        <button class="btn btn-primary">Recommend a dealer now</button>
                       </a>
                  <?php } foreach($dealers2 as $dealer) { ?>
                    <div class="block-one">
                      <h3>dealer's details</h3>
                      <table>
                        <tbody>
                          <tr>
                            <th>Buz. Name</th>
                            <td><?php echo $dealer->name; ?></td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td><?php echo $dealer->address; ?></td>
                          </tr>
                          <tr>
                            <th>Telephone</th>
                            <td><?php echo $dealer->phone; ?></td>
                          </tr>
                          <tr>
                            <th>State</th>
                            <td><?php echo $dealer->state; ?></td>
                          </tr>
                          <tr>
                            <th>Selling Price</th>
                            <td style="color:red;"> ₦<?php echo number_format($dealer->price,2); ?></td>
                          </tr>
                        </tbody>
                      </table>
                      <div>
                       <a href="#"> 
                        <button class="review-btn">Review this dealer</button>
                       </a>
                      </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
              </div>
              <div class="prod-break"></div>
              <div class="bmp-product-tabs hidden-xs">
              <ul>
              <li class="active"><a data-toggle="tab" href="#home" style="color:red;">Description</a></li>
              <li><a data-toggle="tab" href="#additional">Additional Information</a></li>
              <li><a data-toggle="tab" href="#review">Review (0)</a></li>
            </ul>
            </div>
            <div class="prod-recommended-container hidden-xs">
              <div id="home" class="description fade in active">
                <p> <?php echo $product->description; ?></p>
              </div>
              <div id="additional" class="description fade">
                
                <div style="margin-top:-150px;">
                  <h3>Additional Information</h3>
                  <p> <?php echo $product->add_info; ?></p>
                 </div>
              </div>
              <div id="review" class="description fade">
                <h3>Review</h3>
                <p style="margin-top:-150px">Some content in Review</p>
              </div>
            </div>
            <!-- Mobile Vieport Product Description-->
            <div class="panel-group visible-xs" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#description">Description</a>
                  </h4>
                </div>
                    <div id="description" class="panel-collapse collapse in">
                  <div class="panel-body"><?php echo $product->description; ?></div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#add">Additional Information</a>
                  </h4>
                </div>
                <div id="add" class="panel-collapse collapse">
                  <div class="panel-body"><?php echo $product->add_info; ?></div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Reviews(0)</a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
              </div>
            </div>
            <!--end of mobile vieport Product Description-->
            <div class="prod-break"></div>
              <div class="bmp-product-tabs hidden-xs">
                <ul>
                  <li class="tab-header"><a style="color:red;"> Recommend A Dealer For This Item</a></li>
                  <li><a> Recommend Your Business For This Item</a></li>
                </ul>
              </div>

              <div class="prod-recommended-container hidden-xs">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="block-one">
                      <p>
                        Have you recently bought this item from a trusted dealer? If your answer is yes, you can share your experience with other users by entering details of the dealer and the price you paid for it using the short form below.
                       </p>
                       <?php 
                       if($this->session->userdata('isLoggedin')== false) { ?>
                       <p>
                         <span style="color:red; font-weigth:bolder">Note:</span> Only registered user can recommend. Click <a href="/registration" style="color:red; font-weigth:bolder">here </a>to register or <a href="/authentication/login" style="color:red; font-weigth:bolder">here </a> to login

                       </p>
                        <?php } else { ?>
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>products/dealers">
                        <div class="form-group">
                          <label class="control-label col-sm-4">Dealer's Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="dname" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">State:</label>
                          <div class="col-sm-8"> 
                              <select class="form-control" id="sel1" name="state">
                                <?php foreach($states as $state) { ?>
                                <option value="<?php echo $state->name; ?>"><?php echo $state->name; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Office Address:</label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Phone Number:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="phone" class="form-control" value="" required />
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>"/>
                            <input type="hidden" name="productid" value="<?php echo $product->id; ?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="price" class="form-control" value="" required />
                            <input type="hidden" name="productName" value="<?php echo $product->name; ?>"/>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="line-divider2"></div>
                  </div>
                  <div class="col-sm-5">
                  <div class="block-one">
                    <p>
                      Are you a building material dealer? Do you deal in quality materials? Do you sell the item on this page? Do you offer competitive prices? If your answer is yes, you can recommend your business for this item by clicking the recommendation button below
                     </p>
                     <?php 
                       if($this->session->userdata('isLoggedin')== false) { ?>
                       <p>
                         <span style="color:red; font-weigth:bolder">Note:</span> Only registered user can recommend. Click <a href="/registration" style="color:red; font-weigth:bolder">here </a>to register or <a href="/authentication/login" style="color:red; font-weigth:bolder">here </a> to login

                       </p>
                        <?php } else { ?>
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>products/dealers">
                        <div class="form-group">
                          <label class="control-label col-sm-4">Dealer's Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="dname" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">State:</label>
                          <div class="col-sm-8"> 
                              <select class="form-control" id="sel1" name="state">
                                <?php foreach($states as $state) { ?>
                                <option value="<?php echo $state->name; ?>"><?php echo $state->name; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Office Address:</label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Phone Number:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="phone" class="form-control" value="" required />
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>"/>
                           <input type="hidden" name="productid" value="<?php echo $product->id; ?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="price" class="form-control" value="" required />
                            <input type="hidden" name="productName" value="<?php echo $product->name; ?>"/>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                      <?php } ?>
                      
                  </div>
                </div>
                </div>
              </div>
              
              <!-- Mobile Vieport For Recommending Dealers-->
            <div class="panel-group visible-xs" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#recommend1">Recommend A Dealer For This Item</a>
                  </h4>
                </div>
                    <div id="recommend1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                        Have you recently bought this item from a trusted dealer? If your answer is yes, you can share your experience with other users by entering details of the dealer and the price you paid for it using the short form below.
                       </p>
                       <?php 
                       if($this->session->userdata('isLoggedin')== false) { ?>
                       <p>
                         <span style="color:red; font-weigth:bolder">Note:</span> Only registered user can recommend. Click <a href="/registration" style="color:red; font-weigth:bolder">here </a>to register or <a href="/authentication/login" style="color:red; font-weigth:bolder">here </a> to login

                       </p>
                        <?php } else { ?>
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>products/dealers">
                        <div class="form-group">
                          <label class="control-label col-sm-4">Dealer's Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="dname" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">State:</label>
                          <div class="col-sm-8"> 
                              <select class="form-control" id="sel1" name="state">
                                <?php foreach($states as $state) { ?>
                                <option value="<?php echo $state->name; ?>"><?php echo $state->name; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Office Address:</label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Phone Number:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="phone" class="form-control" value="" required />
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>"/>
                            <input type="hidden" name="productid" value="<?php echo $product->id; ?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="price" class="form-control" value="" required />
                            <input type="hidden" name="productName" value="<?php echo $product->name; ?>"/>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                      <?php } ?>
                  </div>
                </div>
              </div>
              <br /><br />
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#recommend2">Recommend Your Business For This Item</a>
                  </h4>
                </div>
                <div id="recommend2" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>
                      Are you a building material dealer? Do you deal in quality materials? Do you sell the item on this page? Do you offer competitive prices? If your answer is yes, you can recommend your business for this item by clicking the recommendation button below
                     </p>
                     <?php 
                       if($this->session->userdata('isLoggedin')== false) { ?>
                       <p>
                         <span style="color:red; font-weigth:bolder">Note:</span> Only registered user can recommend. Click <a href="/registration" style="color:red; font-weigth:bolder">here </a>to register or <a href="/authentication/login" style="color:red; font-weigth:bolder">here </a> to login

                       </p>
                        <?php } else { ?>
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>products/dealers">
                        <div class="form-group">
                          <label class="control-label col-sm-4">Dealer's Name:</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="dname" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">State:</label>
                          <div class="col-sm-8"> 
                              <select class="form-control" id="sel1" name="state">
                                <?php foreach($states as $state) { ?>
                                <option value="<?php echo $state->name; ?>"><?php echo $state->name; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Office Address:</label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Phone Number:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="phone" class="form-control" value="" required />
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>"/>
                           <input type="hidden" name="productid" value="<?php echo $product->id; ?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="phone" name="price" class="form-control" value="" required />
                            <input type="hidden" name="productName" value="<?php echo $product->name; ?>"/>
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <!--end of mobile vieport Recommending Dealers-->

            </div>
              <!--Frequently checked products-->
            <div class="prod-recommended">
              <div class="bmp-product-tabs">
                <ul>
                  <li class="tab-header"><a style="color:red; float:left">People Who Checked This Also Checked </a></li>
                  <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-left hidden-xs"></i></a>
                   <a href=""> <i class="glyphicon glyphicon-chevron-right hidden-xs"></i></a>
                  </li>
                </ul>
              </div>

              <div class="prod-recommended-container" style="border:none">
                <br />
                <div class="row">
                  <?php foreach($checked as $check) { ?>
                  <div class="col-sm-3 col-xs-6 bmp-home-listing back2left">
                <a href="#">
                  <img src="<?php echo base_url(); ?>img/<?php echo $check->img; ?>" class="img-responsive"/>
                </a>
                <div class="bmp-prod-cat"><?php echo $this->db->get_where('sub_category',array('id'=>$check->subcatid))->row()->name; ?></div>
                <div class="bmp-prod-name"><?php echo $check->name; ?></div>
                <div class="bmp-prod-price">Guide Price ₦<?php echo number_format($check->price,2); ?></div>
                <div class="bmp-wishlist-btn-container">
                <a href="#">
                  <button class="bmp-wishlist-btn">ADD TO WISH lIST</button>
                </a>
                </div>
              </div>
              <?php } ?>
                </div>
              </div>
            </div>
            
            <!-- frequently bought products-->
            <div class="prod-recommended">
              <div class="bmp-product-tabs">
                <ul>
                  <li class="tab-header"><a style="color:red; float: left">Frequently Bought Together</a></li>
                  <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-left hidden-xs"></i></a>
                   <a href=""> <i class="glyphicon glyphicon-chevron-right hidden-xs"></i></a>
                   </li>
                </ul>
              </div>

              <div class="prod-recommended-container" style="border:none">
                <br />
                <div class="row">
                <?php foreach($bought as $frequently) { ?>
                  <div class="col-sm-3 col-xs-6 bmp-home-listing back2left">
                <a href="#">
                  <img src="<?php echo base_url(); ?>img/<?php echo $frequently->img; ?>" class="img-responsive"/>
                </a>
                <div class="bmp-prod-cat"><?php echo $this->db->get_where('sub_category',array('id'=>$frequently->subcatid))->row()->name; ?></div>
                <div class="bmp-prod-name"><?php echo $frequently->name; ?></div>
                <div class="bmp-prod-price">Guide Price ₦<?php echo number_format($frequently->price,2); ?></div>
                <div class="bmp-wishlist-btn-container">
                <a href="#">
                  <button class="bmp-wishlist-btn">ADD TO WISH lIST</button>
                </a>
                </div>
              </div>
              <?php } ?>
              </div>
              </div>
            </div>
             <!-- Ads-->
            <div class="row">
              <div class="col-sm-6"> 
                <div class="prod-ads">
                  <img src="http://placehold.it/300X130" alt="" class="img">
                </div>
              </div>
              <div class="col-sm-6"> 
                <div class="prod-ads">
                  <img src="http://placehold.it/300x130" alt="" class="img">
                </div>
              </div>
            </div>
            <div class="bmp-clients">
              <img src="<?php echo base_url(); ?>img/clients.png" alt="" width="700" class="img-responsive">
            </div>
            <!--end of ads-->

          <!--end of product page -->
          <?php } ?>
      </div>
      </div>
    </div>
<?php
  include("template/footer.php");
?>