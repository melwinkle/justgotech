<!-- Page for calling on alert to add to cart -->

      <!-- The Modal -->
      <div class="modal" id="add_<?php echo $phd?>">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">ADD TO CART</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <?php  
          $sql_ph="SELECT * FROM pharm_drugs inner join pharmacists on pharm_drugs.PharmID=pharmacists.PharmID inner join drugs  on pharm_drugs.DID = drugs.DID where PHD=$phd;";
     $pharm=mysqli_query($conn,$sql_ph);
     $ph=mysqli_fetch_assoc($pharm);?>
          <!-- Modal body -->
          <div class="modal-body">
          <form action="ph_temp.php?phd=<?php echo $phd;?>" method="post">

          <input class="form-control" type="text" name="type" id='type' value="Are you sure you want to add <?php echo $ph['DName']; echo " from "; echo $ph['Pharm_Name'];?> to your cart" readonly><br>

          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger" name="update" >YES</button>
          </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" data-dismiss="modal" >CLOSE </button>
          
          
          </div>
      </div>
    </div>
    </div>