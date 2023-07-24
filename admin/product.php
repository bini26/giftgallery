<?php 
include('top.php');

if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['p_id']) && $_GET['p_id']>0){
	$type=($_GET['type']);
	$id=($_GET['p_id']);
	if($type=='delete'){
		mysqli_query($con,"delete from product where p_id='$id'");
		redirect('product.php');
	}
	if($type=='active' || $type=='deactive'){
		$status=1;
		if($type=='deactive'){
			$status=0;
		}
		mysqli_query($con,"update product set status='$status' where p_id='$id'");
		redirect('product.php');
	}

}

$sql="select * from product ";
$res=mysqli_query($con,$sql);

?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Category Master</h1>
			  <a href="manage_category.php" class="add_link">Add Product</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="25%">Name</th>
                            <th width="10%">Price</th> 
							<th width="20%">Image</th>
							 <th width="10%">Stock</th>
						     <th width="25%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(mysqli_num_rows($res)>0){
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
						?>
						<tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['name']?></td>
							<td><?php echo $row['price']?></td>
							<td><img src="<?php  echo $row['image'];?>" width="50px" height="40px"></td>
							<td><?php echo $row['stock']?></td>

							<td>
								<a href="manage_category.php?p_id=<?php echo $row['p_id']?>"><label class="badge badge-success hand_cursor">Edit</label></a>&nbsp;
								<?php
								if($row['status']==1){
								?>
								<a href="?p_id=<?php echo $row['p_id']?>&type=deactive"><label class="badge badge-danger hand_cursor">Active</label></a>
								<?php
								}else{
								?>
								<a href="?p_id=<?php echo $row['p_id']?>&type=active"><label class="badge badge-info hand_cursor">Deactive</label></a>
								<?php
								}
								
								?>
								&nbsp;
								<a href="?p_id=<?php echo $row['p_id']?>&type=delete"><label class="badge badge-danger delete_red hand_cursor">Delete</label></a>
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