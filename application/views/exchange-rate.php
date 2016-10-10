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
                <div class="bmp-dealers-title">
                  EXchange Rates
                </div>  
                  <table class="table table-hover">
                    <thead>
                      <tr>
                   
                        <th><img src="<?php echo base_url();?>img/usd.png"> USD </th>
                        <th><img src="<?php echo base_url();?>img/gbp.png"> GBP</th>
                        <th><img src="<?php echo base_url();?>img/eur.png"> EUR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                      
                        <th>BUY / SELL</th>
                        <th>BUY / SELL</th>
                        <th>BUY / SELL</th>
                      </tr>
                      
                      <tr>
                        <?php foreach($bdc as $bdc) { ?>
                        <td><?php echo $bdc->rate; ?></td>
                         <?php } ?>
                      </tr>                   
                    </tbody>
                  </table>

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