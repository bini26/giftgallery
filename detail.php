<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    
    <style>
        #detail_wrapper .dess {
    padding:100px;
    margin-bottom:20px;
}
#detail_wrapper .dess h3,h4{
    padding-bottom:10px;
    margin:5px;
    color:#086660;
}

#detail_wrapper .dess button{

width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border-radius: 1px solid #cce7d0;
    border: 1px solid #cce7d0;
    position: absolute;
   margin-right:20px;
   cursor: pointer;
   
    
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding-top: 5px ;
  padding-left:5px;
  cursor: pointer;

  /* Position the tooltip */
  position:absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
    </style>
   

    <title>Souvenir</title>
</head>
<body>
    <section id="header">
        <a href="#"> <img class="logo" src="logo.png" width="200px" height="100px"></a>
        <div>
            <ul id="nav-bar">
              <li><a href="project.php">Home</a></li>
              <li><a href="product.php" class="active" >Products</a></li>
              <div class="dropdown">
                <button class="dropbtn">Categories 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="Gift.php">Gifts</a>
                  <a href="Flower.php">Flowers </a>
                  <a href="Chocolate.php">Chocolates</a>
                </div>
              </div> 
               <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="signup.php">SignUp</a></li>
              <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
              <a href="#" id="close"><i class="far fa-times"></i></a>

</ul>
</div>
<div id="mobile">
<a href="cart.php"><i class="far fa-shopping-bag"></i></a>
<i id="bar" class="fas fa-outdent"></i>

</div>
    </section>
    <section id="detail_wrapper" class="section-p1">
             
            
                 <?php include("connect.php");
                 $p_id=$_GET['p_id'];
                 $sql="SELECT * FROM product where p_id=$p_id";
                 $results=$con->query($sql);
                  $final=$results->fetch_assoc();

                    ?>
                 <div class="detail">
                     <img src="<?php echo $final['image'] ?>" alt="product image">
</div>
                     <div class="dess">
                      <h3><?php echo $final['name']?></h3>
                      <h4>Rs<?php echo $final['price']?></h4>
                      <h4>Stock:<?php echo $final['stock']?></h4>
                      <div class="tooltip">
                      <button><i class="fal fa-shopping-cart cart" onclick="location.href='carthandler.php?action=add-to-cart&cart_id=<?php echo $final['p_id']?>&cart_name=<?php echo $final['name']?>&cart_price=<?php echo $final['price']?>&cart_img=<?php echo $final['image']?>&cart_stock=<?php echo $final['stock']?>'"></i></button>
                      <span class="tooltiptext" onclick="location.href='carthandler.php?action=add-to-cart&cart_id=<?php echo $final['p_id']?>&cart_name=<?php echo $final['name']?>&cart_price=<?php echo $final['price']?>&cart_img=<?php echo $final['image']?>&cart_stock=<?php echo $final['stock']?>'">ADD TO CART</span>
</div>
                    </div>
                      
                 
                
                
            
    </section>
    
    <?php include("footer.php")?>
</body>
<script src="responsivebar.js"></script>
</html>