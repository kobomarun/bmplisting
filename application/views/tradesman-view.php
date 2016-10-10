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
                  List of Tradesmen
                </div>  
                  <table class="table table-hover table-bordered table-striped">
                    <thead>
                      <tr>
                   
                        <th>Name </th>
                        <th>Job Type</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>State</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($trades as $trade) { ?>
                      <tr>                      
                        <td><?php echo $trade->name; ?></td>
                        <td><?php echo $trade->jobType; ?></td>
                        <td><?php echo $trade->phone; ?></td>
                        <td><?php echo $trade->email; ?></td>
                        <td><?php echo $trade->address; ?></td>
                        <td><?php echo $trade->state; ?></td>
                      </tr>
                      <?php } ?>
                                     
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