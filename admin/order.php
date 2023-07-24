<?php 
include('top.php');

if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['oid']) && $_GET['oid']>0){
	$type=($_GET['type']);
	$id=($_GET['oid']);
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update order_info set status='$status' where oid='$id'");
		redirect('order.php');
	}

}

$sql="select * from order_info order by oid desc";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Order_Info</h1>
			  
			  <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="15%">Customer_Id</th>
                            <th width="25%">Product_Id</th>
							<th width="15%">Quantity</th>
							<th width="15%">Added On</th>
                            <th width="20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['customer_id']?></td>
							<td><?php echo $row['product_id']?></td>
							<td><?php echo $row['quantity']?></td>
						
							<td>
							<?php 
							$dateStr=strtotime($row['added_on']);
							echo date('d-m-Y',$dateStr);
							?>
							</td>
							<td>
								
								<?php
								if($row['status']==1){
								?>
								<a href="?oid=<?php echo $row['oid']?>&type=deactive"><label class="badge badge-danger hand_cursor">Active</label></a>
								<?php
								}else{
								?>
								<a href="?oid=<?php echo $row['oid']?>&type=active"><label class="badge badge-info hand_cursor">Deactive</label></a>
								<?php
								}
								
								?>
							</td>
                           
                        </tr>
                        <?php 
						$i++;
						} } else { ?>
						<tr>
							<td colspan="5">No data found</td>
						</tr>
						<?php } ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
        
<?php include('footer.php');?>