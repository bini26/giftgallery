<?php 
include('top.php');
$msg="";
$name="";
$price="";
$image="";
$stock="";
$id="";

if(isset($_GET['id']) && $_GET['id']>0){
	$id=($_GET['id']);
	$row=mysqli_fetch_assoc(mysqli_query($con,"select * from product where p_id='$id'"));
	$name=$row['name'];
	$price=$row['price'];
	$stock=$row['stock'];
	$image=$row['image'];
}

if(isset($_POST['submit'])){
	$category=($_POST['category']);
	$order_number=($_POST['order_number']);
	$added_on=date('Y-m-d h:i:s');
	
	if($id==''){
		$sql="select * from product where name='$name'";
	}else{
		$sql="select * from product where name='$name' and p_id!='$id'";
	}	
	if(mysqli_num_rows(mysqli_query($con,$sql))>0){
		$msg="Category already added";
	}else{
		if($id==''){
			mysqli_query($con,"insert into product(name,status,image,price,stock) values('$name',1,'$image','$price','$stock')");
		}else{
			mysqli_query($con,"update product set name='$name', price='$price',image='$image',stock='$stock' where p_id='$id'");
		}
		
		redirect('category.php');
	}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Manage Category</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" required value="<?php echo $name?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Price</label>
                      <input type="textbox" class="form-control" placeholder="Price" name="pricer"  value="<?php echo $price?>">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Stock</label>
                      <input type="text" class="form-control" placeholder="stock" name="stock" required value="<?php echo $stock?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Image</label>
                      <input type="text" class="form-control" placeholder="Image" name="image" required value="<?php echo $image?>">
					  <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
<?php include('footer.php');?>