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
              <?php if(isset($msg)){ ?>
              <div align="center">
                    <?php echo $msg; ?>
              </div>
              <br>
              <?php } ?>
              <!--<h5>Search results for  <strong><?php echo $search_item; ?></strong></h5>-->
              <?php if($products!=null and isset($suggested)){ ?>
                <h3 align="center">Below are suggested products for <strong><?php echo $search_item; ?></strong></h3>
              <?php } ?>
              <?php if($products!=null){ ?>
              <?php foreach($products as $row) { ?>
              <div class="col-sm-3 col-xs-6 bmp-home-listing">
                <a href="<?php echo base_url() . "products/details/". $row->catid.'/'.url_title($row->category_name); ?>">
                  <img src="<?php echo base_url(); ?>img/<?php echo $row->img; ?>" class="img-responsive" style="height:135px"/>
                </a>
                <div class="bmp-prod-cat"><?php echo $row->category_name; ?></div>
                <div class="bmp-prod-name"><?php echo $row->product_name; ?></div>
                <div class="bmp-prod-price">Guide Price: ₦<?php echo $row->price; ?></div>
                <div class="bmp-wishlist-btn-container">
                <a onclick="addtowishlist(<?php echo $row->product_id; ?>)">
                  <button class="bmp-wishlist-btn" onclick="swal({   title: 'Requisition Added', timer: 700,   showConfirmButton: false });">ADD TO WISH lIST</button>
                </a>
                </div>
              </div>
              <?php } ?>
            </div>
            <?php } ?>
            
            <div class="back-to-top">
              <a  onClick="window.scrollTo(0,0);"><i class="glyphicon glyphicon-triangle-top"></i></a>
            </div>
          </div>
          <div class="row cat-pagination">
            <div class="col-md-4 col-sm-5">
             <!--  <p>Showing 1 - 16 of 20</p> -->
                <!--<p align="center"> <?php echo $links; ?>  </p>-->
            </div>
            <div class="col-md-8 col-sm-7">
            <!--   <p><nav aria-label="Page navigation">
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
        </nav> -->
            </div>
          </div>
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