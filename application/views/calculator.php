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
                <div class="bmp-dealers-title">Building Materials Calculator</div>  
                  <p>
                      Are you a building material dealer? Do you deal in quality materials? Do you sell the item on this page? Do you offer competitive prices? If your answer is yes, you can recommend your business for this item by clicking the recommendation button below
                     </p>
                     <form class="form-inline">
                      <div class="form-group">
                        <div class="col-sm-12"> 
                          <select class="form-control" onchange="window.location='<?php echo base_url(); ?>calculator/get_products/'+this.value" id="sel1" name="state">
                          <option value="">Select Category</option>
                          <?php foreach($categories as $row){ ?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                          <?php } ?>
                          </select>
                        </div>
                      </div>
                      <!-- <button type="submit" class="btn btn-default">Add more</button> -->
                    </form>
                    
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