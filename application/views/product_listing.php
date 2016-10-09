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
                <div class="bmp-dealers-title">List your products</div>  
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     </p>
                     <?php 
                       if($this->session->userdata('isLoggedin')== false) { ?>
                       <p>
                         <span style="color:red; font-weigth:bolder">Note:</span> Only registered user can recommend. Click <a href="/registration" style="color:red; font-weigth:bolder">here </a>to register or <a href="/authentication/login" style="color:red; font-weigth:bolder">here </a> to login

                       </p>
                        <?php } else { ?>
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>products/list-your-products">
                        <div class="form-group">
                          <label class="control-label col-sm-4">Select Category:</label>
                          <div class="col-sm-8"> 
                              <select class="form-control" id="sel1" name="category">
                                <?php foreach($categories as $category) { ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                <?php } ?>
                              </select>
                          </div>
                        </div>
                  
                        <div class="form-group">
                          <label class="control-label col-sm-4">Product Name:</label>
                          <div class="col-sm-8">
                            <input type="text" name="productName" class="form-control" value="<?php echo set_value('productName'); ?>" required />
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="control-label col-sm-4">Address:</label>
                          <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>" required />
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
                          <label class="control-label col-sm-4">Email:</label>
                          <div class="col-sm-8">
                            <input type="text" name="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" required />                 
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Phone Number:</label>
                          <div class="col-sm-8">
                            <input type="text" name="phone" class="form-control" value="<?php echo $this->session->userdata('phone'); ?>" required />
                            <input type="hidden" name="userid" value="<?php echo $this->session->userdata('id'); ?>"/>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-4">Price:</label>
                          <div class="col-sm-8">
                            <input type="number" name="price" class="form-control" value="<?php echo set_value('price'); ?>" required />
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