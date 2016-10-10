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
                <li><a href="<?php echo base_url(); ?>wishlist"><i class="glyphicon glyphicon-list-alt"></i> My Requisition</a></li>
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
              <a href="<?php echo base_url() . "products/details/". $product->id.'/'.url_title($product->name); ?>">
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
                            Your Requisition Orders
                           </h3>
                           <?php if(!$this->session->userdata('gender') || !$this->session->userdata('country')) {   ?>
                              <div class="alert alert-success" role="alert">
                                 Click on Edit Profile to complete your profile
                                <a href="#" class="close">&times;</a>
                              </div>
                          <?php } ?>
                        </div>
                        
                          <div class="row">
                            <div class="col-md-2 col-lg-2 " align="center"> 
                            </div>
                            <div class=" col-md-10 col-lg-10 "> 
                              <?php 
                              if($requisition) {
                                $i = 1;
                              ?>
                              <table class="table table-user-information pull-left">
                                <tbody>
                                  <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                  </tr> 
                                  <?php foreach($requisition as $row) { ?>              
                                  <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $this->db->get_where('bmp_products',array('id'=>$row->productid))->row()->name; ?></td>
                                    <td><?php echo $row->price; ?></td>                                
                                  </tr>
                                  <?php $i++; } ?>
                                </tbody>
                              </table>
                              <div class="divider"></div>
                              <?php }  else { echo "<h4>You Order Any Requisition</h4>"; }?>
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