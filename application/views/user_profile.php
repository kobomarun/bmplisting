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
                <li><a href="<?php echo base_url(); ?>dealers/recommended"><i class="glyphicon glyphicon-list-alt"></i> Requisition Orders</a></li>
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
                        <?php if($this->session->flashdata('success')) { ?>
                          <div data-alert class="alert alert-success" role="alert">
                            <strong><?php echo $this->session->flashdata('success'); ?></strong> 
                            <a href="#" class="close">&times;</a>
                          </div>
                         <?php } ?>
                        <div class="">
                          <h3 class="">
                           <i class="glyphicon glyphicon-user"></i>   <?php echo $this->session->userdata('fname') . " " . $this->session->userdata('lname'); ?></h3>
                           <?php if(!$this->session->userdata('gender') || !$this->session->userdata('country')) {   ?>
                              <div class="alert alert-success" role="alert">
                                 <?php echo $this->db->get_where('email', array('type'=>'profileUpdate'))->row()->email; ?>
                                <a href="#" class="close">&times;</a>
                              </div>
                          <?php } ?>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-2 col-lg-2 " align="center"> 
                              <?php if($this->session->userdata('gender') == 'Male') { ?>
                              <img alt="User Pic" src="<?php echo base_url(); ?>img/d-male.jpeg" class="img-circle img-responsive" />
                              <?php } else { ?>
                              <img alt="User Pic" src="<?php echo base_url(); ?>img/d-female.png" class="img-circle img-responsive" />
                              <?php  } ?>
                            </div>
                            <div class=" col-md-10 col-lg-10 "> 
                              <table class="table table-user-information">
                                <tbody>
                                  <tr>
                                    <td>Email Address:</td>
                                    <td><?php echo $this->session->userdata('email'); ?></td>
                                  </tr>
                                  <tr>
                                    <td>Registration Date:</td>
                                    <td><?php echo $this->session->userdata('date'); ?></td>
                                  </tr>
                                  <tr>
                                    <td>Phone number</td>
                                    <td><?php echo $this->session->userdata('phone'); ?></td>
                                  </tr>
                                    <tr>
                                    <td>Gender</td>
                                    <td><?php echo $this->session->userdata('gender'); ?></td>
                                  </tr>
                                    <tr>
                                    <td>Address</td>
                                    <td><?php echo $this->session->userdata('address'); ?></td>
                                  </tr>
                                  <tr>
                                    <td>State</td>
                                    <td><?php echo $this->session->userdata('state'); ?></td>
                                  </tr>
                                    <td>Country</td>
                                    <td><?php echo $this->session->userdata('country'); ?></td>      
                                  </tr>
                                 
                                </tbody>
                              </table>
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