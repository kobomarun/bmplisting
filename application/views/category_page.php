<?php
  include("template/header.php");
?>
<div class="row"> 
  <div class="container-fluid">
    <?php include("template/sidebar.php"); ?>
    <div class="col-md-9 col-sm-8 col-xs-12">
          <!-- Category Column-->
          <div class="bmp-maincol">
            <div class="row">
              <div class="col-sm-12 container">
                <div class="bmp-show-num">
                  <div class="row">
                    <div class="col-sm-9">
                      <p>Showing 1 - 16 of 40</p>
                    </div>
                    <div class="col-sm-3">
                      <div class="dropdown" style="float:right">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Default
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="#">Default</a></li>
                          <li><a href="#">Price: Low to High</a></li>
                          <li><a href="#">Price: High to Low</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php foreach($categories as $cat) { ?>
              <div class="col-sm-3 col-xs-12 bmp-home-listing">
                <a href="#">
                  <img src="<?php echo base_url(); ?>img/<?php echo $cat->img; ?>" class="img-responsive" style="height:135px"/>
                </a>
                <div class="bmp-prod-cat">Sub-category name</div>
                <div class="bmp-prod-name"><?php echo $cat->name; ?></div>
                <div class="bmp-prod-price">Guide Price: ₦<?php echo $cat->price; ?></div>
                <div class="bmp-wishlist-btn-container">
                <a href="#">
                  <button class="bmp-wishlist-btn">ADD TO WISH lIST</button>
                </a>
                </div>
              </div>
              <?php } ?>
            </div>
            
            <div class="back-to-top">
              <a  onClick="window.scrollTo(0,0);"><i class="glyphicon glyphicon-triangle-top"></i></a>
            </div>
          </div>
          <div class="row cat-pagination">
            <div class="col-md-4 col-sm-5">
              <p>Showing 1 - 16 of 20</p>
            </div>
            <div class="col-md-8 col-sm-7">
              <p><nav aria-label="Page navigation">
            <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
            </div>
          </div>
    </div>
  </div>
</div>
<?php
  include("template/footer.php");
?>