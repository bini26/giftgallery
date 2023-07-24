<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <script src="project.js"></script>
    <title>Souvenir</title>
</head>
<body>
    <section id="header">
        <a href="#"> <img class="logo" src="logo.png" width="200px" height="100px"></a>
        <div>
            <ul id="nav-bar">
              <li><a href="project.php">Home</a></li>
              <li><a href="product.php"  >Products</a></li> 
               <li><a href="about.php">About</a></li>
              <li><a href="contact.php"  >Contact</a></li>
              <li><a href="signup.php" class="active">SignUp</a></li>
              <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
              <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
            
        </div>
    </section>
    <section id="page-header" class="contact-header">
        <h2>#Lets Be Souvenir Member</h2>
        <p>We Heartly Welcome You In Our Family</p>
    </section>
    <section class="section-p1" id="signupform">
        <h2>SignUp</h2>
        <form
        action="register.php"
        method="post"
        name="register"
        >
      
 


            <div >
            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
            <input type="text " placeholder="Firstname" name="firstname" id="fname" required>
            
        </div>
       <span id="err_fname" class="error_message"></span>
           <div >
            <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
            <input type="text " placeholder="Lastname" id="lname" name="lastname" required>
            
           </div>
           <span id="err_lname" class="error_message"></span>
            <div>
            <i class="fal fa-envelope fa-2x"></i>
            <input type="mail " placeholder="@gmail.com" id="mail" name="email" required>
            
        </div>
        <span id="err_email" class="error_message"></span>
            <div>
            <i class="fal fa-phone-alt fa-2x"></i>
            <input type="phone " placeholder="Phone" id="phone" name="phone" required>
            </div>
            <span id="err_phone" class="error_message"></span> 
            <div>
            <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <input type="text " placeholder="Username" id="username" name="username"required >
            
        </div>
        <span id="err_username" class="error_message"></span>
    <div>
            <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
               
            <input type="password" placeholder="Password" id="password" name="password" required>
            <span class="eye" onclick="myfunction()">
                <i class="fa fa-eye" id="hide1"></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
            </span>
            
        </div>
        <span id="err_password" class="error_message"></span>
        <div> 
            <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
               
            <input type="password" placeholder="Conform Password" id="cpassword" name="cpassword" required> 
            <span class="eye" onclick="myfunction1()">
                <i class="fa fa-eye" id="hide3"></i>
                <i class="fa fa-eye-slash" id="hide4"></i>
            </span>
            
        </div>
        <span id="err_repassword" class="error_message"></span>
            <div>
                <i class="fa fa-address-card fa-2x" aria-hidden="true"></i>

                <input type="address" placeholder="Address" id="address" name="address" required > 
                
            </div>
            <span id="err_address" class="error_message"></span>
            <div>
                <button class="btn" type="submit" onclick="return validateRegisterForm()" >SignUp</button>
            </div>
            <p>Already Have Account?<a href="login1.php" class="login">Login</a></p>
        </form>
    </section>
    
  <?php include("footer.php")?>
 
</body>
<script src="responsivebar.js"></script>
</html>