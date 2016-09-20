<?php
  include("template/header.php");
?>
<div class="row"> 
  <div class="container-fluid">
    <?php include("template/sidebar.php"); ?>
    <div class="col-md-9 col-sm-8 col-xs-12">
      <!-- MAin Column-->
      <div class="bmp-maincol">
      <?php 
          if($categories!=null)
              foreach($categories as $row)
              {
                $category_id = $row->id;
      ?>
          <?php 
              $this->db->select('p.name as product_name,p.price,p.img,s.name as category_name');
              $this->db->from('bmp_products p');
              $this->db->join('sub_category s','p.subcatid = s.id');
              $this->db->where('p.catid',$category_id);
              $result = $this->db->get()->result();
          ?>
        <div class="row">
          <div class="col-sm-12 container">
            <h2><?php echo $row->name; ?><small><a href="#">see more</a></small></h2>
          </div>
              <?php foreach($result as $row1){ ?>
                <div class="col-sm-3 col-xs-12 bmp-home-listing">
                  <a href="#">
                    <img src="<?php echo base_url(); ?>img/<?php echo $row1->img; ?>" class="img-responsive" style="width:200px"/>
                  </a>
                  <div class="bmp-prod-cat"><?php echo $row1->category_name; ?></div>
                  <div class="bmp-prod-name"><?php echo $row1->product_name; ?></div>
                  <div class="bmp-prod-price"><?php echo $row1->price; ?></div>
                  <div class="bmp-wishlist-btn-container">
                  <a href="#">
                    <button class="bmp-wishlist-btn">ADD TO WISH lIST</button>
                  </a>
                  </div>
                </div>
              <?php } ?>
        </div>
    <?php } ?>
        <div class="bmp-clients">
          <img src="<?php echo base_url(); ?>img/clients.png" alt="" width="700" class="img-responsive">
        </div>
        <div class="back-to-top">
          <a  onClick="window.scrollTo(0,0);"><i class="glyphicon glyphicon-triangle-top"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include("template/footer.php");
?>