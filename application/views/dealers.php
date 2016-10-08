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
                <div class="bmp-dealers-title">Recommend Your Products</div>  
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
                          <label class="control-label col-sm-4">Product Name:</label>
                          <div class="col-sm-8">
                            <input type="text" name="productName" class="form-control" value="" required />
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
                            <input type="text" name="phone" class="form-control" required />
                            <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>"/>
                           <input type="hidden" name="productid" value=""/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="text" name="price" class="form-control" value="" required />
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                          </div>
                        </div>
                      </form>
                      <?php } ?>
                    
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