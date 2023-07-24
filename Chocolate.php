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
              <li><a href="project.php">Home</a></li>
              <li><a href="product.php" class="active" >Products/Chocolates</a></li>
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
    <section id="product1" class="section-p1">
             
             <div class="pro-container">
              
                <?php include("connect.php");
                // $sql="SELECT * FROM chocolate,product where chocolate.p_id=product.p_id";
                $sql = "SELECT * FROM product where image LIKE 'Chocolates%' ";
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
   <?php include("footer.php")?>
</body>
<script src="responsivebar.js"></script>
</html>