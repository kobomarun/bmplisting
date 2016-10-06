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
                  <h1>My Products</h1>
                 <table class="table table-hover absd">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $i = 1;
                      if($cartcontents!=null){
                        foreach ($cartcontents as $items){ 
                      ?>
                    
                      <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $items['name']; ?></td>
                        <td><?php echo $items['price']; ?></td>
                        <td><?php echo $items['qty']; ?></td>
                        <td><?php echo $items['total']; ?></td>
                  
                        <td><a href="<?php echo base_url(); ?>calculator/remove/<?php echo $items['rowid']; ?> "data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td> 
                        <!--<td>
                          <a href="#" onclick="deleteitem(<?php echo $items['rowid']; ?>)" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        
                        </td>-->
                      </tr>
                    <?php $i++; } }else{ ?>
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
          <div>
              <h3 align="center">Total Amount:  &#x20A6;<?php echo number_format($total_amount) ?></h3>
          </div>
        </div>
      </div>
    </div>
<?php
  include("template/footer.php");
?>

<script type="text/javascript">
  function deleteitem(product_id)
  {
    $.ajax({  
        type: "POST",  
        url: "<?php echo base_url();?>calculator/delete_product/"+product_id,  

        success: function(response)
        {
              console.log("return", response);
        }
    });
  }
</script>

