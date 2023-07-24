<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <script src="form.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <title>Souvenir</title>
</head>

<body>
    <section id="header">
        <a href="#"> <img class="logo" src="logo.png" width="200px" height="100px"></a>
        <div>
            <ul id="nav-bar">
                <li><a href="project.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
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
    <section id="page-header" class="contact-header">
        <h2>#Lets Talk</h2>
        <p>Happy to see your feedback !! </p>
    </section>
    <section id="contact-detils" class="section-p1">
        <div class="details">
            <span>Get In Touch</span>
            <h2>Visit Our Store or Contact US Today For Your Query</h2>
            <h3>Store </h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Sunwal-13 Badera</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>souvenir@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>0245756,9806544365</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Sunday-Friday:9am-5pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18734.443921010996!2d83.6855930389193!3d27.571894857169816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399425514b392949%3A0xfe36dc8a6cb6a788!2sNepal%20Electricity%20Authority%2C%20New%20Butwal%20Substation%20Bhumahi%20Nawalparasi!5e0!3m2!1sen!2snp!4v1645544826213!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    <section id="form-details">
        <form action="contact1.php" method="post" name="contact">
            <span>
                <h4>Leave A Message</h4>
            </span>
            <h2>We Love To Hear From You</h2>
            <input type="text" placeholder="Your Name" name="name" id="name"><span id="err_name" class="error_message"></span><br>
            <input type="mail" placeholder="@gmail.com" name="email" id="email">
            <span id="err_email" class="error_message"></span><br>
            <input type="text" placeholder="Subject" name="subject" id="subject">
            <span id="err_subject" class="error_message"></span><br>
            <textarea cols="30" rows="10" placeholder="Your Message" name="msg" id="msg"></textarea>
            <span id="err_msg" class="error_message"></span><br>
            <button class="normal" type="submit" onclick="return validateRegisterForm()">Submit</button>
        </form>
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
    <?php include("footer.php") ?>
</body>
<script src="responsivebar.js"></script>

</html>