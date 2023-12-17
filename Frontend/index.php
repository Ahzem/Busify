<?php
require_once '../Backend/ConnectDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSIFY</title>
    <link  type="text/css" rel="stylesheet" href="template.css">
    <link  type="text/css" rel="stylesheet" href="index.css">
</head>
<body>

<!--===============================================Header Start===============================================================-->
    <header>
        <nav class="navigation">
            <img class="logo" src="Supportive Files\logo name.png" alt="Logo">
                <div class="header__quick__links">
                    <a class="navigation__a" href="index.php">Home</a>
                    <a class="navigation__a" href="#about__us">About</a>
                    <a class="navigation__a" href="#our__services">Services</a>
                    <a class="navigation__a" href="#footer">Contact</a>                
                    <a href="#details"><button class="btnsignin-popup">Sign In</button></a>
                    <a href="#details"><button class="btnsignup-popup">Sign Up</button></a>
                    <!--<img class="profile__img" src="Supportive Files\R (4).jpg" alt="profile">-->
                </div>
        </nav>
    </header>
<!--=================================================Header End===============================================================-->
<section id="home__img"></section>
    <div id="home__img__div">
        <img class="top__bus__img" src="Supportive Files\HomeBus.png" alt="Home Image">
    </div>
    <details id="details">
        <summary class="get__started__button">GET STARTED</summary>
        <div class="selection">
            <div class="driver">
                <img class="driver__img" src="Supportive Files\driver-black.png" alt="Driver">
                <a href="DriverSignIn.php"><p class="selection__buttons">Driver</p></a>
            </div>
            <div class="passenger">
                <img class="passenger__img" src="Supportive Files\passenger-black.png" alt="Passenger">
                <a href="PassengerSignIn.php"><p class="selection__buttons">Passenger</p></a>
            </div>
        </div>
    </details>
</section>

<!--=================================================About Us===============================================================-->

<!--<script src="HomePage.js"></script>-->

<div id="about__us"></div>
    <h2 class="home__h2">About Us</h2>
</div>
<div class="about__us__div">        
    <div class="home__about__us">
        <p class="home__p">Lorem ipsum dolor sit amet consectetur. Elit sapien sodales duis nec eget lacus in pretium sed. Ac donec nunc aliquam non nunc dapibus a enim viverra. Odio ipsum tempus sagittis ornare ornare. Nunc mi diam enim elit risus. Ultrices nisi urna vulputate sed senectus justo aliquam. Luctus risus dignissim eget non. Tellus vulputate eu posuere amet volutpat enim at lacus non. Molestie arcu dignissim viverra sapien quam nec bibendum nisl eu. Sagittis accumsan nisl mauris cras integer quam tempus urna ornare. Imperdiet fringilla tellus et nec. Lacinia sed venenatis sodales a sit amet sed. In sed elit lectus sit. Nunc, aliquam, aenean, amet, sed, amet, amet</p>
    </div>
    <div>
        <img class="down__bus__img" src="Supportive Files\HomeBushalf.png" alt="Home Image">
    </div>
</div>

<!--=================================================Our Services===============================================================-->

<section id="our__services"></section>
        <h2 class="home__h2__ii">Our Services</h2>
            <div class="our__services__div">
                <a href="PassengerSignIn.php">
                <div id="rating">
                    <img id="rating__img" src="Frontend\Supportive Files\OIP (3).jpg" alt="Rating">
                    <p>Rating</p>
                </div>
                </a>
                <a href="PassengerSignIn.php">
                <div id="ticketing">
                    <img id="ticketing__img" src="Frontend\Supportive Files\OIP (2).jpg" alt="Ticketing">
                    <p>Ticket Booking</p>
                </div>
                </a>
                <a href="PassengerSignIn.php">
                <div id="tracking">
                    <img id="tracking__img" src="Frontend\Supportive Files\GPS-Tracking-Definition5.jpg" alt="Trackinh">
                    <p>Tracking</p>
                </div>
                </a>
            </div>
    

<!--=================================================Footer Area==============================================================-->
    <footer id="footer">
        <div class="footer">
            <div class="frame">
                <div class="footer__quick__links">
                    <a class="footer__a" href="#">Home</a>
                    <a class="footer__a" href="#about__us">About Us</a>
                    <a class="footer__a" href="index.php">Privacy Policy</a>
                    <a class="footer__a" href="DriverSignIn.php">Sign in as a Driver</a>
                    <a class="footer__a" href="PassengerSignIn.php">Sign in as a Passenger</a>
                </div>
                <div class="footer__quick__links">
                    <a class="footer__a" href="#">FAQ</a>
                    <a class="footer__a" href="#footer">Contact Us</a>
                    <a class="footer__a" href="#">Terms</a>
                    <a class="footer__a" href="DriverSigngUp.php">Sign up as a Driver</a>
                    <a class="footer__a" href="PassengerSignUp.php">Sign up as a Passenger</a>
                </div>
                <div>
                    <p class="footer__a">Follow Us On</p>
                    <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-facebook-100 (1).png" alt="Facebook"></a>
                    <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-twitter-100.png" alt="Twitter"></a>
                    <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-instagram-100.png" alt="Instagram"></a>
                    <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-linkedin-100.png" alt="LinkedIn"></a>
                </div>
                <div class="company__detail">
                    <div>
                        <img class="footer__logo" src="Supportive Files\Untitled Project.jpg" width="200px" height="200px" alt="Logo">
                    </div>
                    <div class="Company__Address">
                        <p>Busfy Bus Tracking & Booking (Pvt) Ltd.</p>
                        <p>No. 12/3, Sample Road, Sample City.</p>
                        <p>Hotline: 12345</p>
                        <p>info@busfy.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p>All Rights Reserved &copy; 2020</p>
        </div>
    </footer>
</body>
</html>

