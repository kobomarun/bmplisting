<!-- sidebar Column-->
<div class="col-md-3 col-sm-3 col-xs-12 hidden-xs">
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
      <li <?php if($this->uri->segment(4) === url_title($cat->name)) { ?>class="dropdown active" <?php } else { ?> class="dropdown" <?php } ?> >
        <a class="dropbtn" href="<?php echo base_url(); ?>category/listing/<?php echo $cat->id; ?>/<?php echo url_title( $cat->name) ?>">
          <i class="glyphicon glyphicon-list-alt"></i> <?php echo $cat->name ; ?>
        </a>
            
        <div class="dropdown-content">
          <?php
              $this->db->where('catid',$cat->id);
              $query =  $this->db->get('sub_category')->result();
            
            foreach($query as $subcat) { 
            ?>
          <a href="<?php echo base_url(); ?>category/sub-categories/<?php echo $subcat->id; ?>/<?php echo url_title( $cat->name) ?>">
            <?php echo $subcat->name; ?>
          </a>
          <?php } ?>
        </div>
        
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
      <a href="<?php echo base_url() . "products/details/". $product->id.'/'.url_title($product->name); ?>">
      <div class="col-sm-5 ">
        <img src="<?php echo base_url(); ?>img/<?php echo $product->img; ?>" class="img-responsive"/>
      </div>
      <div class="col-sm-7 text">
        <div class="bmp-prod-cat"><?php echo $this->db->get_where('sub_category',array('id'=>$product->subcatid))->row()->name; ?></div>
        <div class="bmp-prod-name"><?php echo $product->name; ?></div>
        <div class="bmp-prod-price">Guide Price: ₦<?php echo number_format($product->price); ?></div>
      </div>
      </a>
    </div>
    <div class="divider"></div>
    <?php } ?>
  </div>
</aside>
</div>