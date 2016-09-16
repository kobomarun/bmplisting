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
        <a href="<?php echo base_url(); ?>listing/listing/<?php echo $cat->id; ?>/<?php echo preg_replace('/\s+/', '', $cat->name) ?>">
          <i class="glyphicon glyphicon-list-alt"></i> <?php echo $cat->name; ?>
        </a>
      </li>
      <?php } ?>
    </ul>
  
  </div>
  <div class="bmp-aside-latest">
    <div class="post-header">
      Latest
    </div>
    <div class="row ">
      <a href="#">
      <div class="col-sm-5 ">
        <img src="<?php echo base_url(); ?>img/blocks.jpeg" class="img-responsive"/>
      </div>
      <div class="col-sm-7 text">
        <div class="bmp-prod-cat">Sub-category name</div>
        <div class="bmp-prod-name">Product name</div>
        <div class="bmp-prod-price">₦1200</div>
      </div>
      </a>
    </div>
    <div class="divider"></div>

    <div class="row">
      <a href="#">
      <div class="col-sm-5 ">
       <img src="<?php echo base_url(); ?>img/iron.jpeg" class="img-responsive"/>
      </div>
      <div class="col-sm-7 text">
        <div class="bmp-prod-cat">Sub-category name</div>
        <div class="bmp-prod-name">Product name</div>
        <div class="bmp-prod-price">₦1200</div>
      </div>
      </a>
    </div>
    <div class="divider"></div>

    <div class="row">
      <a href="#">
      <div class="col-sm-5 ">
       <img src="<?php echo base_url(); ?>img/pan.jpeg" class="img-responsive"/>
      </div>
      <div class="col-sm-7 text">
        <div class="bmp-prod-cat">Sub-category name</div>
        <div class="bmp-prod-name">Product name</div>
        <div class="bmp-prod-price">₦1200</div>
      </div>
      </a>
    </div>
    <div class="divider"></div>

    <div class="row">
      <a href="#">
      <div class="col-sm-5 ">
        <img src="<?php echo base_url(); ?>img/branite.jpeg" class="img-responsive"/>
      </div>
      <div class="col-sm-7 text">
        <div class="bmp-prod-cat">Sub-category name</div>
        <div class="bmp-prod-name">Product name</div>
        <div class="bmp-prod-price">₦1200</div>
      </div>
      </a>
    </div>
  </div>
</aside>
</div>