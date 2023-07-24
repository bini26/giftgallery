<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<style>
    footer{
    background-color: #E3E6F3 ;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
footer .col{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}
footer .logo{
    margin-bottom:30px
}
footer h4{
    font-size:14px;
padding-bottom:20px;
}
footer p{
    font-size:13px;
margin:0 0 8px 0;
}
footer a{
    font-size:16px;
    text-decoration: none;
    color:#222;
    margin-bottom:10px;
  
}
footer a:hover{
    text-decoration: underline;
    color: #064c6d;
}
footer .follow{
margin-top:50px
}
footer .follow  i{
    color:#465b52;
    padding-right: 5px;
    cursor: pointer;
    }

    footer .links{
        margin-top: 50px;
    }
    footer .colm{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    footer .copy-right{
        width: 100%;
        text-align: center;
    }
</style>
    <title>Document</title>
    
</head>
<body>
<footer class="section-p1">
        <div class="col">
            <img src="logo.png" alt="" width="200px" height="100px" class="logo">
            <h4>Contact</h4>
            <p><i class="fa fa-map-marker-alt text-primary mr-3 icon"></i> Sunwal-13</p>
            <p><i class="fa fa-phone alt text-primary mr-3 icon"></i>0245756,9806544365</p>
            <p><i class="fa fa-envelope text-primary mr-3 icon"></i> souvenir@gmail.com</p></div>
        
            <div class="links">
                <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                <div class="colm">
                    <a class="text-dark mb-2" href="project.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-dark mb-2" href="products.php"><i class="fa fa-angle-right mr-2"></i>Products</a>
                    <a class="text-dark mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                    <a class="text-dark mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="follow"><h4>Follow us</h4>
                <div class="icons">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div></div>
                <div class="copy-right">
                    <p>@binod pandey-project 4th semester</p>
                </div>
    </footer>
</body>
</html>