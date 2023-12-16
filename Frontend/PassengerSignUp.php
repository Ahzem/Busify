<?php
require_once '../Backend/ConnectDB.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $user_exist_query = "SELECT * FROM passenger_signup WHERE email = '$email'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "
            <script>
                alert('User already exists.');
                window.location.href='PassengerSignIn.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO passenger_signup (fname, lname, phone, email, password) VALUES ('$fname', '$lname', '$phone', '$email', '$password')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                    alert('User created successfully.');
                    window.location.href='Search&Track.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Cannot Run Query.');
                    window.location.href='PassengerSignUp.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='PassengerSignUp.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busify Passenger</title>
    <link  type="text/css" rel="stylesheet" href="template.css">
    <link  type="text/css" rel="stylesheet" href="SignUpSignIn.css">
    
</head>
<body>

<!--===============================================Header Start===============================================================-->
<header>
    <nav class="navigation">
        <img class="logo" src="Supportive Files\logo name.png" alt="Logo">
            <div class="header__quick__links">
                <a class="navigation__a" href="index.php">Home</a>
                <a class="navigation__a" href="index.php">About</a>
                <a class="navigation__a" href="index.php">Services</a>
                <a class="navigation__a" href="index.php">Contact</a>                
                <a href="PassengerSignIn.php"><button class="btnsignin-popup">Sign In</button></a>
                <!--<a href="PassengerSignUp.php"><button class="btnsignup-popup">Sign Up</button></a>-->
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
        <form id="form" action="" method="POST" onsubmit="return validateInputs();">
                <div class="names">
                    <div class="input__fields">
                        <label for="fname">First Name</label>
                        <input class="input" type="text" id="fname" name="firstname" placeholder="Your name.." required>
                        <div class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="lname">Last Name</label>
                        <input class="input" type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="input__fields">
                    <label for="phone">Phone Number</label>
                    <input class="input" type="tel" id="phone" name="phone" placeholder="Your phone number.." required>
                    <div class="error"></div>
                </div>                

                <div class="password__details">              
                    <div class="input__fields">
                        <label for="email">Email</label>
                        <input class="input" type="text" id="email" name="email" placeholder="Your email.." required>
                        <div class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="password">Password</label>
                        <input class="input" type="password" id="password" name="password" placeholder="Your password.." required>
                        <div id="error_password" class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="cpassword">Confirm Password</label>
                        <input class="input" type="password" id="cpassword" name="cpassword" placeholder="Confirm password.." required>
                        <div class="error"></div><br>
                        <div class="error" id="form-errors"></div>
                    </div> 
                </div>
                    <div class="google__signin">
                        <p id="another__login">Or Sign in with</p>
                        <div class="google__logo__div">
                            <a href="#"><img class="socialmedia__logo" src="Supportive Files\icons8-google-100.png" alt="Google"></a>
                        </div>
                        <div>
                            <button class="submit__button" type="submit" name="submit">Sign Up</button>
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
                    <a class="footer__a" href="index.php">Home</a>
                    <a class="footer__a" href="index.php">About Us</a>
                    <a class="footer__a" href="index.php">Privacy Policy</a>
                    <a class="footer__a" href="DriverSingIn.php">Sign in as a Driver</a>
                    <a class="footer__a" href="PassengerSingIn.php">Sign in as a Passenger</a>
                </div>
                <div class="footer__quick__links">
                    <a class="footer__a" href="#">FAQ</a>
                    <a class="footer__a" href="index.php">Contact Us</a>
                    <a class="footer__a" href="#">Terms</a>
                    <a class="footer__a" href="DriverSingUp.php">Sign up as a Driver</a>
                    <a class="footer__a" href="PassengerSingUp.php">Sign up as a Passenger</a>
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

