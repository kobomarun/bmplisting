<?php
  include("template/header.php");
?>
<?php
  include("template/sidebar.php");
?>
  
  <div class="col-md-9 col-sm-8 col-xs-12">
    <!-- Category Column-->
    <div class="bmp-blog">
      <div class="row">
        <div class="col-sm-12">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <section class="bmp-dealers">    
                <div class="bmp-dealers-title">
                  Blog
                </div>  
                <?php foreach($blog as $post) { ?>
                <h1><a href="<?php echo base_url(); ?>blog/<?php echo $post->slug; ?>"><?php echo $post->title; ?></a></h1>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post->date; ?>. by <span class="glyphicon glyphicon-user"> </span> <?php echo $this->db->get_where('bmp_users', array('id', $post->userid))->row()->fname; ?> </p>


                <img class="img-responsive" src="http://placehold.it/900x250" alt="">

                <hr>

                <!-- Post Content -->
                <p ><?php echo word_limiter($post->description, 100); ?> <a href="">read more >></a></p>
                
                <hr>

              <?php  } ?>

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