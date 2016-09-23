<footer>
        <div class="row">
          <div class="container">
            <div class="col-sm-3 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Menu</h2>
                <ul>
                  <li><a href="#"> About Us</a></li>
                  <li><a href="#">Building Calculators </a></li>
                  <li><a href="#">Wish List</li>
                  <li><a href="#">Blog </li>
                  <li><a href="#">List Your Products</li>
                  <li><a href="#">Price Comparison </li>
                  <li><a href="#">Careers </li>
                  <li><a href="#">Contact Us </li>
                  <li><a href="#">Your Account </a></li>
                </ul>
              </div>
            </div> 

             <div class="col-sm-3 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Tools </h2>
                  <ul>
                  <li><a href="#">Building Calculators</a> </li>
                  <li><a href="#">Price Tracker</a></li>
                  <li><a href="#">Business Directory</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Information</h2>
                <ul>
                  <li><a href="#">Advertise on BMPList</li>
                  <li><a href="#">Submit Requisition Order</li>
                  <li><a href="#">Business Training</li>
                  <li><a href="#">Price Comparison</li>
                  <li><a href="#">Search for a Tradesman</li>
                  <li><a href="#">Give a feedback </li>
                  <li><a href="#">Careers </li>
                  <li><a href="#">Contact Us </a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="footer-section">
                <h2 class="header">Newsletter</h2>
                <div class="">
                  <p>Subscribe to Newsletter</p>
                  <?php if($this->input->post('newsletter')) { 
                    $email = $this->input->post('newsletter');
                    $date = date("Y,m,d");

                    $data = array(
                      'email'=>$email,
                      'date'=>$date
                    );
                    $this->db->insert('newsletter',$data);
                  ?>
                      <script type="text/javascript">
                        swal("Succesful!", "You have successfully subscribed to our newsletter", "success")
                      </script>
                      <?php } ?>
                  <form action="" method="post">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-envelope"></i></button>
                      </span>
                      <input type="email" class="form-control" placeholder="Search your@email.com" name="newsletter" required />
                    </div><br />
                    <div>
                     <input type="submit" value="Subscribe Now!" class="btns btn-large" />
                  </div>
                  </form>
                </div> 
                <h2 class="header">Follow us</h2>
                <ul class="footer-social">
                  <li><a href="#"><span class="icon icon-bmp-facebook"></i> </li>
                  <li><a href="#"><i class="icon icon-bmp-twitter"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-pinterest-p"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-gplus"></i></li>
                  <li><a href="#"><i class="icon icon-bmp-youtube-play"></i></li>
               
                </ul>   
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
            <div class="row">
              <div class="col-sm-12 terms">
                <ul>
                  <li><a href="#">Terms & Condition</li>
                  <li><a href="#">Privacy Policy</li>
                  <li><a href="#">Cookies</li>
                  <li><a href="#">Service Terms</li>
                  <li><a href="#">Internet Advertising Terms</li>
                  <li><a href="#">FAQs</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="bmp-copyrights text-center">
                <p>© 2016. BMPList.com. All rights reserved.</p>
              </div>
            </div>
      </footer>
    </div>
  </div>
 </div>
 <!-- Modal Login-->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Log in</h4>
      </div> <!-- /.modal-header -->

      <div class="modal-body">
        <form role="form" action="<?php echo base_url();?>authentication/login" method="post">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="uLogin" placeholder="Login" name="email">
              <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" id="uPassword" placeholder="Password" name="password">
              <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> <!-- /.input-group -->
          </div> <!-- /.form-group -->

          <div class="forgotp">
            <label>
              <a href=""> Forgot your password?</a>
            </label>
          </div> <!-- /.checkbox -->
          <div class="modal-footer">
        <input type="submit" class="form-control btn btn-primary" value="Login"/>

        <div class="progress">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
            <span class="sr-only">progress</span>
          </div>
        </div>
      </div> <!-- /.modal-footer -->
        </form>

      </div> <!-- /.modal-body -->

      

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

</body>

</html>