<?php
  include("template/header.php");
?>
<div class="col-md-3 col-sm-3 col-xs-12">
          <!-- sidebar Column-->
          <aside>
            <div class="bmp-aside-cat">
              <div class="cat-header">
                MENU
              </div>
              <ul>
                <li><a href="<?php echo base_url(); ?>user"><i class="glyphicon glyphicon-list-alt"></i> My Profile</a></li>
                <li><a href="<?php echo base_url(); ?>user/editprofile/<?php echo $this->session->userdata('id'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Edit My Profile</a></li>
                <li><a href="<?php echo base_url(); ?>wishlist"><i class="glyphicon glyphicon-list-alt"></i> My Wishlist</a></li>
                <li><a href="<?php echo base_url(); ?>dealers/recommended/<?php echo $this->session->userdata('id'); ?>"><i class="glyphicon glyphicon-list-alt"></i> Recommended Dealers</a></li>
                <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Requisition Orders</a></li>
              </ul>
            
            </div>
            <div class="bmp-aside-latest">
            <div class="post-header">
              Latest Products
            </div>
            <?php
              $this->db->order_by("name", "asc");
              $this->db->limit(4);
              $query =  $this->db->get('bmp_products')->result();
            ?>
            <?php foreach($query as $product) { ?>
            <div class="row ">
              <a href="<?php echo base_url() . "products/details/". $product->id.'/'.preg_replace('/\s+/', '', $product->name); ?>">
              <div class="col-sm-5 ">
                <img src="<?php echo base_url(); ?>img/<?php echo $product->img; ?>" class="img-responsive"/>
              </div>
              <div class="col-sm-7 text">
                <div class="bmp-prod-cat">Sub-category name</div>
                <div class="bmp-prod-name"><?php echo $product->name; ?></div>
                <div class="bmp-prod-price">Guide Price: ₦<?php echo $product->price; ?></div>
              </div>
              </a>
            </div>
            <div class="divider"></div>
            <?php } ?>
          </div>
          </aside>
        </div>
  
   <div class="col-md-9 col-sm-8 col-xs-12">
          <!-- Profile Column-->
          <div class="bmp-profile">
            <div class="row">
              <div class="col-sm-12">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-9 col-md-9">
                      <div class="">
                        <div class="">
                          <h3 class="">
                            <i class="glyphicon glyphicon-user"></i>   <?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></h3>
                        </div>
                         <div class="bmp-signup">
            <div class="row">
              <div class="col-sm-12">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8">
                      <section>      
                        <h1 class="entry-title"><span>Edit Your Profile</span> </h1>
                        <hr width="990px;">
                        <?php foreach($profile as $row) { ?>
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" >        
                          <div class="form-group">
                            <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
                            <div class="col-md-8 col-sm-9">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" readonly>
                              </div>
                            </div>
                          </div>
                    
                          <div class="form-group">
                            <label class="control-label col-sm-3">First Name <span class="text-danger">*</span></label>
                            <div class="col-md-5 col-sm-8">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" class="form-control" name="fname" value="<?php echo $row->fname; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">Last Name <span class="text-danger">*</span></label>
                            <div class="col-md-5 col-sm-8">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" class="form-control" name="lname" value="<?php echo $row->lname; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-3">Phone No. <span class="text-danger">*</span></label>
                            <div class="col-md-5 col-sm-8">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                              <input type="text" class="form-control" name="phone" value="<?php echo $row->phone; ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-sm-3">gender</label>
                          <div class="col-md-5"> 
                              <select class="form-control" id="sel1" name="gender">
                                <option value="<?php echo $row->country; ?>><?php echo $row->gender; ?></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                              </select>
                          </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label col-sm-3">Address<span class="text-danger">*</span></label>
                            <div class="col-md-5 col-sm-8">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                              <input type="text" class="form-control" name="address" value="<?php echo $row->address; ?>">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                          <label class="control-label col-sm-3">State</label>
                          <div class="col-md-5"> 
                              <select class="form-control" id="sel1" name="state">
                                <option value="<?php echo $row->state; ?>"><?php echo $row->state; ?></option>
                                <option value="Lagos">Lagos</option>
                                <option>Ogun</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3">Country</label>
                          <div class="col-md-5"> 
                              <select class="form-control" id="sel1" name="country">
                                <option value="<?php echo $row->country; ?>"><?php echo $row->country; ?></option>
                                <option value="lagos">Nigeria</option>
                                <option>USA</option>
                                <option>3</option>
                                <option>4</option>
                              </select>
                          </div>
                        </div>
                      
                          
                          <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-10">
                              <input name="Submit" type="submit" value="Update Profile" class="btn btn-primary">
                            </div>
                          </div>
                        </form>
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