<?php
include ("C:\wamp64\www\Busify\Backend\ConnectDB.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busify Passenger</title>
    <link  type="text/css" rel="stylesheet" href="template.css">
    <link  type="text/css" rel="stylesheet" href="SignUpSignIn.css">
    <script defer src="index.js"></script>
</head>
<body>

<!--===============================================Header Start===============================================================-->
<header>
    <nav class="navigation">
        <img class="logo" src="Supportive Files\logo name.png" alt="Logo">
            <div class="header__quick__links">
                <a class="navigation__a" href="index.html">Home</a>
                <a class="navigation__a" href="#about__us">About</a>
                <a class="navigation__a" href="#our__services">Services</a>
                <a class="navigation__a" href="#footer">Contact</a>                
                <a href="PassengerSignIn.php"><button class="btnsignin-popup">Sign In</button></a>
                <!--<a href="PassengerSignUp.html"><button class="btnsignup-popup">Sign Up</button></a>-->
                <!--<img class="profile__img" src="Supportive Files\R (4).jpg" alt="profile">-->
            </div>
    </nav>
</header>
<!--=================================================Header End===============================================================-->
    <div class="driver__signin__page">
        <div>
            <img class="bus__img" src="Supportive Files\HomeBus.png" alt="Bus">
        </div>
        <div class="driver__signin__details">
            <form id="form" action="insertDataPassenger.php" method="POST">
                <div class="names">
                    <div class="input__fields">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <div class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        <div class="error"></div>
                    </div>
                </div>
                <div class="input__fields">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number..">
                    <div class="error"></div>
                </div>                

                <div class="password__details">              
                    <div class="input__fields">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your email..">
                        <div class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Your password..">
                        <div id="error_password" class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password..">
                        <div class="error"></div>
                    </div> 
                </div>
                    <div class="google__signin">
                        <p id="another__login">Or Sign in with</p>
                        <div class="google__logo__div">
                            <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-google-100.png" alt="Google"></a>
                        </div>
                        <div>
                            <button class="submit__button" type="submit" name="signup">Sign Up</button>
                        </div>
                        <div class="password__details">
                            <p>Are You Don't Have An Account? <a href="PassengerSignIn.php">Sign In</a></p>
                        </div>
                    </div>          
            </form>
        </div>        
    </div>    


<!--=================================================Footer Area==============================================================-->
    <footer id="footer">
        <div class="footer">
            <div class="frame">
                <div class="footer__quick__links">
                    <a class="footer__a" href="#">Home</a>
                    <a class="footer__a" href="#about__us">About Us</a>
                    <a class="footer__a" href="#">Privacy Policy</a>
                    <a class="footer__a" href="#">Sign in as a Driver</a>
                    <a class="footer__a" href="#">Sign in as a Passenger</a>
                </div>
                <div class="footer__quick__links">
                    <a class="footer__a" href="#">FAQ</a>
                    <a class="footer__a" href="#">Contact Us</a>
                    <a class="footer__a" href="#">Terms</a>
                    <a class="footer__a" href="#">Sign up as a Driver</a>
                    <a class="footer__a" href="#">Sign up as a Passenger</a>
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
