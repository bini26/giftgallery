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

    <title>Souvenir</title>
    
</head>
<body>
    <section id="header">
        <a href="#"> <img class="logo" src="logo.png" width="200px" height="100px"></a>
        <div>
            <ul id="nav-bar">
              <li><a class="active" href="project.php">Home</a></li>
              <li><a href="product.php">Products</a></li>
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
    <section id="hero">
        <h4>Trade in offer</h4>
        <h2>super value deals</h2>
        <h1>on all products</h1>
        <p>save upto 70%</p>
        <button>shop now</button>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="features/f1.png" >
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="features/f2.png" >
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="features/f3.png" >
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="features/f4.png" >
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="features/f5.png" >
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="features/f6.png" >
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section id="product1" class="section-p1">
             <h2 >Featured Products</h2>
             <p>To make your gift special </p>
             <div class="pro-container">
                 <?php include("connect.php");
                 $sql="SELECT * FROM feature,product where feature.pr_id=product.p_id";
                 $results=$con->query($sql);

                 while($final=$results->fetch_assoc()){

                    ?>
                 <div class="pro">
                 <a href="detail.php?p_id=<?php echo $final['p_id']?>"><img src="<?php echo $final['image'] ?>" alt="product image"></a>
                     <div class="des">
                      <h5><?php echo $final['name']?></h5>
                      <h4>Rs<?php echo $final['price']?></h4>
                    </div>
                    <button><i class="fal fa-shopping-cart cart" onclick="location.href='carthandler.php?action=add-to-cart&cart_id=<?php echo $final['p_id']?>&cart_name=<?php echo $final['name']?>&cart_price=<?php echo $final['price']?>&cart_img=<?php echo $final['image']?>&cart_stock=<?php echo $final['stock']?>'"></i></button>
                 </div>
                 <?php }?>
                
             </div>
    </section>
    <section id="offer">
        <div class="small-container">
            <div class="row">
                <div class="col2">
                <?php include("connect.php");
                 $sql="SELECT * FROM product where product.p_id=64";
                 $rows=$con->query($sql);
                 while($product=$rows->fetch_assoc()){
                 

                    ?>
                    <!-- <img src="Gifts/doctor ganesha.jpg" alt="" class="offer-img"> -->
                    <a href="detail.php?p_id=<?php echo $product['p_id']?>"><img src="<?php echo $product['image'] ?>" alt="product image" class="offer-img"></a>
                </div>
                <div class="col2">
                    
                    <p>Exclusively Available on Souvenir Gift gallery </p>
                    <h1><?php echo $product['name']?> </h1>
                    <small>Sanju Movie featured statue of doctor ganesha , <br> made from pure white marble. <br> Gift for the better health </small><br>
                    <button class="btn" onclick="location.href='carthandler.php?action=add-to-cart&cart_id=<?php echo $product['p_id']?>&cart_name=<?php echo $product['name']?>&cart_price=<?php echo $product['price']?>&cart_img=<?php echo $product['image']?>&cart_stock=<?php echo $product['stock']?>'">Buy Now &#8594;<button>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section id="newsletters" class="section-p1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail Updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
   <?php include("footer.php");
   ?>
</body>
<script src="responsivebar.js"></script>
</html>