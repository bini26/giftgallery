<?php
session_start();
include('connect.php');
include('finction.inc.php');

$username="";
$password="";
if(isset($_POST['submit'])){
	$username=($_POST['username']);
	$password=($_POST['password']);
	$_SESSION['username']=$username;
	$sql="select * from user_info where username='$username' and password='$password'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['IS_LOGIN']='yes';
        $_SESSION['username']=$row['username'];
        $_SESSION['userid']=$row['user_id'];
		redirect('project.php');
	}else{
	echo "<script> alert('Invalid Username Or Password');</script>";
    redirect('login1.php');
	}
}
?>

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
        <h2>Login</h2>
        <form method="post"  >
            <div>
                <i class="fa fa-user fa-2x" aria-hidden="true"></i>
            <input type="text " placeholder="Username" id="username" name="username" required>
            </div><div>
            <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
               
            <input type="password" placeholder="Password" default="" id="password" name="password" required  > 
            <span class="eye" onclick="myfunction()">
            <i class="fa fa-eye" id="hide1"></i>
            <i class="fa fa-eye-slash" id="hide2"></i>
        </span>
        </div>
        
            <div>
                <input type="submit"  value="login" name="submit" class="btn">
            </div>
            <p>Create New Account?<a href="signup.php" class="login">Signup</a></p>
        </form>
       
    </section>
    
   <?php include("footer.php")?>
   
</body>
<script src="responsivebar.js"></script>
</html>