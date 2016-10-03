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

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/intlTelInput.js"></script>
<script type="text/javascript">
  $("#demo").intlTelInput();
</script>
</body>

</html>