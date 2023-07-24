

<?php 
// $data= $_POST['str'];
$data= $_REQUEST['q'];
$cartTotal=0;
session_start();

 if(isset($_SESSION['Payment'])){
   if(isset($_SESSION['username']))
   {
     $user=$_SESSION['userid'];
     
    include('connect.php');
    
    $myArray = json_decode($data,true);
    foreach($myArray as $d){
   
      
      $product = $d['id'];
      $quantity = $d['quantity'];

      $que = "insert into order_info(customer_id,product_id,quantity,status) values($user,$product,$quantity,1)";
      
      $stmt ="update product set stock=(stock-$quantity) where p_id=$product";
      $con->query($stmt);
      $con->query($que);
      // $i++; 
        
    }// }while($i<count($myArray));
    echo" <script>alert('order placed sucessfully');
    window.location.href='project.php';</script>";
    
    unset($_SESSION['cart']);
    unset($_SESSION['Payment']);
      
   }
  
   else{
    header('location:login1.php');
   }
 }else{
echo"<script>alert('Payment isnot made');
  window.location.href='cart.php';</script>";
 }

     ?>