<!-- sidebar Column-->
<div class="col-md-3 col-sm-3 col-xs-12">
<aside>
  <?php
    $this->db->order_by("name", "asc");
    $query =  $this->db->get('category')->result();
  ?>
  <div class="bmp-aside-cat">
    <div class="cat-header">
      Categories
    </div>
    <ul>
      <?php foreach($query as $cat) { ?>
      <li>
        <a href="<?php echo base_url(); ?>category/listing/<?php echo $cat->id; ?>/<?php echo preg_replace('/\s+/', '', $cat->name) ?>">
          <i class="glyphicon glyphicon-list-alt"></i> <?php echo $cat->name; ?>
        </a>
      </li>
      <?php } ?>
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
      <a href="#">
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