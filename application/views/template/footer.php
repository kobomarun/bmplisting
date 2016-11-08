<footer>
        <div class="row">
          <div class="container">
            <div class="col-sm-3 col-xs-6">
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

             <div class="col-sm-3 col-xs-6">
              <div class="footer-section">
                <h2 class="header">Tools </h2>
                  <ul>
                  <li><a href="#">Building Calculators</a> </li>
                  <li><a href="#">Price Tracker</a></li>
                  <li><a href="#">Business Directory</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3 col-xs-6">
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

            <div class="col-sm-3 col-xs-9">
              <div class="footer-section">
                <h2 class="header">Follow us</h2>
                <ul class="footer-social">
                  <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Like Us On Facebook"><span class="icon icon-bmp-facebook"></i> </a>
                    </li>
                  <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Follow us on Twitter"><i class="icon icon-bmp-twitter"></i></a>
                    </li>
                  <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Pinterest"><i class="icon icon-bmp-pinterest-p"></i></a>
                    </li>
                  <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Follow Us On Google Plus"><i class="icon icon-bmp-gplus"></i></li></a>
                  <li>
                    <a href="#" data-toggle="tooltip" title="Watch Us On Youtube"data-placement="bottom"><i class="icon icon-bmp-youtube-play"></i></a>
                  </li>
                </ul>  
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
                      <input type="email" class="form-control" placeholder="Enter your email address" name="newsletter" required />
                    </div><br />
                    <div>
                     <input type="submit" value="Subscribe Now!" class="btns btn-large" />
                  </div>
                  </form>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
            <div class="row">
              <div class="col-sm-12 col-xs-10 terms">
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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script type="text/javascript">
  var scrolltotop={setting:{startline:700,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="<?php echo base_url(); ?>img/arrow201.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();
</script>
</body>

</html>