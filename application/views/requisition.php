<?php
  include("template/header.php");
?>
<div class="row"> 
  <div class="container-fluid">
    <?php include("template/sidebar.php"); ?>
    <div class="col-md-9 col-sm-8 col-xs-12">
          <!-- Members Column-->
          <div class="bmp-signup">
              <div class="col-sm-12">
                <div class="container">
                  <h1>Your Requisition</h1>
                  <p>Below are the requisition you made.</p>
                 <table class="table table-hover absd">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i = 1;
                      if($this->cart->contents()!=null){
                        foreach ($this->cart->contents() as $items){ 
                      ?>
                     
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $items['name']; ?></td>
                        <td><?php echo $items['price']; ?></td>
                  
                        <td>
                          <a href="<?php echo base_url(); ?>requisition/remove/<?php echo $items['rowid']; ?> "data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </td> 

                        <!--<td>
                          <a href="#" onclick="deleteitem(<?php echo $items['rowid']; ?>)" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                        
                        </td>
                      </tr>
                      
                       <form action="" >
                        <input type="hidden" name="name" value="<?php echo $items['name']; ?>"/>
                        <input type="hidden" name="price" value="<?php echo $items['name']; ?>" />
                        <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-10">
                          <?php if($this->session->userdata('isLoggedin')) { ?>
                          <input name="Submit" type="submit" value="Submit" class="btn btn-primary">
                          <?php } else { ?>
                          <input name="Submit" type="submit" value="Submit" class="btn btn-primary" disabled />
                          <?php } ?>
                        </div>
                      </div>
                      </form>
                    <?php $i++; } ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td><b>Total</b></td>
                          <td><b><?php echo $this->cart->format_number($this->cart->total()); ?></b></td>
                      </tr>
                    <?php } else{ ?>
                      <tr>
                        <td colspan="4">No result found</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <script type="text/javascript">
  function deleteitem(product_id)
  {
    $.ajax({  
        type: "POST",  
        url: "<?php echo base_url();?>requisition/delete_product/"+product_id,  

        success: function(response)
        {
              console.log("return", response);
        }
    });
  }


</script>
<?php
  include("template/footer.php");
?>
