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
                    <p>Showing 1 - <?php echo $per_page . " of " . $total_rows; ?></p>
                    </div>
                    <div class="col-sm-3">
                      <div class="dropdown" style="float:right">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          Default
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li><a href="">Default</a></li>
                          <li><a href="<?php echo current_url(); ?>">Price: Low to High</a></li>
                          <li><a href="#">Price: High to Low</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="listing">
              <?php 
                      if($categories!=null){
                        foreach($categories as $cat) { 
               ?>
              <div class="col-sm-3 col-xs-6 bmp-home-listing">
                <a href="<?php echo base_url() . "products/details/". $cat->id.'/'.url_title($cat->name); ?>">
                  <img src="<?php echo base_url(); ?>img/<?php echo $cat->img; ?>" class="img-responsive" style="height:135px"/>
                </a>
                <div class="bmp-prod-cat"><?php echo $this->db->get_where('sub_category',array('id'=>$cat->subcatid))->row()->name; ?></div>
                <div class="bmp-prod-name">
                 <a href="<?php echo base_url() . "products/details/". $cat->id.'/'.url_title($cat->name); ?>">
                  <?php echo $cat->name; ?>
                </a>
                </div>
                <div class="bmp-prod-price">Guide Price: ₦<?php echo number_format($cat->price); ?></div>
                <div class="bmp-wishlist-btn-container">
                <a onclick="addtowishlist(<?php echo $cat->id; ?>)">
                  <button class="bmp-wishlist-btn" onclick="swal({   title: 'Requisition Added', timer: 700,   showConfirmButton: false });">ADD TO REQUISITION</button>
                </a>
                </div>
              </div>
              <?php } } ?>
            </div>
          </div>
          <?php if($links){ ?>
          <div class="row cat-pagination">
            <div class="col-md-8 col-sm-7">
              <p><nav aria-label="Page navigation">
           <ul class="pagination">
            <li><?php echo $links; ?> </li>
            <!--<li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>-->
          </ul> 
          </nav>
            </div>
          </div>
          <?php } ?>
    </div>
  </div>
</div>
<?php
  include("template/footer.php");
?>

<script type="text/javascript">
  function addtowishlist(product_id)
  {
      $.ajax({  
        type: "POST",  
        url: "<?php echo base_url();?>wishlist/add/"+product_id,  

        success: function(response)
        {
              console.log("return", response);
        }
      });

  }

</script>