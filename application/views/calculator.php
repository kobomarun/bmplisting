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
                        <div class="col-sm-8"> 
                          <select class="form-control" id="sel1" name="state">
                            <option value="lagos">Select Product Category</option>
                            <option>Ogun</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class=""> 
                          <select class="form-control" id="sel1" name="state">
                            <option value="lagos">Select Product</option>
                            <option>Ogun</option>
                            <option>3</option>
                            <option>4</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div>
                          <input type="number" class="form-control" Placeholder="Quantity" size="5" Required />
                        </div>
                      </div>
                      <button type="submit" class="btn btn-default">Add more</button>
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