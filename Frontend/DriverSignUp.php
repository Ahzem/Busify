<?php
require_once '../Backend/ConnectDB.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $from = $_POST['dstfrom'];
    $to = $_POST['dstto'];
    $routeno = $_POST['routeno'];
    $busmodel = $_POST['busmodel'];
    $busno = $_POST['busno'];
    $buscolor = $_POST['buscolor'];
    $buscapacity = $_POST['buscapacity'];
    $servicetype = $_POST['servicetype'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $user_exist_query = "SELECT * FROM driver_signup WHERE busno = '$busno'";
    $result = mysqli_query($conn, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "
            <script>
                alert('User already exists.');
                window.location.href='DriverSignIn.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO driver_signup (fname, lname, phone, nic, email, dstfrom, dstto, routeno, busmodel, busno, buscolor, buscapacity, servicetype, password) VALUES ('$fname', '$lname', '$phone', '$nic', '$email', '$from', '$to', '$routeno', '$busmodel', '$busno', '$buscolor', '$buscapacity', '$servicetype', '$password')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                    alert('User created successfully.');
                    window.location.href='DriverSignIn.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Cannot Run Query.');
                    window.location.href='DriverSignUp.php';
                </script>
                ";
            }
        }
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='DriverSignUp.php';
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
    <title>Busify Driver</title>
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
                <a href="DriverSignIn.php"><button class="btnsignin-popup">Sign In</button></a>
                <!--<a href=""><button class="btnsignup-popup">Sign Up</button></a>-->
                <!--<img class="profile__img" src="Supportive Files\R (4).jpg" alt="profile">-->
            </div>
    </nav>
</header>
<!--=================================================Header End===============================================================-->
    <div>
        <div>
            <form id="form" action="" method="POST" onsubmit="return validateInput();">
<!--=================================================Driver Details==============================================================-->
        <div class="form">   
            <div>
                <div class="driver__details">
                    <h2>Driver Details</h2>
                </div>
                <div class="border__box">
                    <div class="names">
                        <div class="input__fields">
                            <label for="fname">First Name</label>
                            <input class="input" type="text" id="fname" name="fname" placeholder="Your name.." required>
                            <div class="error"></div>
                        </div>
                        <div class="input__fields">
                            <label for="lname">Last Name</label>
                            <input class="input" type="text" id="lname" name="lname" placeholder="Your last name.." required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="input__fields">
                        <label for="phone">Phone Number</label>
                        <input class="input" type="tel" id="phone" name="phone" placeholder="Your phone number.." required>
                        <div class="error"></div>
                    </div>
                    <div class="input__fields">
                        <label for="nic">NIC Number</label>
                        <input class="input" type="text" id="nic" name="nic" placeholder="Your NIC number.." required>
                        <div class="error"></div>
                    </div>                
                    <div class="input__fields">
                        <label for="email">Email</label>
                        <input class="input" type="email" id="email" name="email" placeholder="Your email.." required>
                        <div class="error"></div>
                    </div>                    
                </div>
            </div>    
<!--=================================================Vehicle Details==============================================================-->
            <div>
                <div class="driver__details">
                    <h2>Vehicle Details</h2>
                </div>
                <div class="border__box">
                    <div class="destination">
                        <div class="input__fields">
                            <label for="dstfrom">From</label>
                            <input class="input" type="text" id="dstfrom" name="dstfrom" placeholder="Your starting point.." required>
                            <div class="error"></div>
                        </div>
                        <div class="input__fields">
                            <label for="dstto">To</label>
                            <input class="input" type="text" id="dstto" name="dstto" placeholder="Your destination.." required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="route__and__model">
                        <div class="input__fields">
                            <label for="routeno">Route Number</label>
                            <input class="input" type="text" id="routeno" name="routeno" placeholder="Your route number.." required>
                            <div class="error"></div>
                        </div>
                        <div class="input__fields">
                            <label for="busmodel">Bus Model</label>
                            <input class="input" type="text" id="busmodel" name="busmodel" placeholder="Your bus model.." required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="num__and__color">
                        <div class="input__fields">
                            <label for="busno">Bus Number</label>
                            <input class="input" type="text" id="busno" name="busno" placeholder="Your bus number.." required>
                            <div class="error"></div>
                        </div>
                        <div class="input__fields">
                            <label for="buscolor">Bus Color</label>
                            <input class="input" type="text" id="buscolor" name="buscolor" placeholder="Your bus color.." required>
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="capacity__and__service">
                        <div class="input__fields">
                            <label for="buscapacity">Bus Capacity</label>
                            <input class="input" type="text" id="buscapacity" name="buscapacity" placeholder="Your bus capacity.." required>
                            <div class="error"></div>
                        </div>
                        <div class="input__fields">
                            <label for="servicetype">Service Type</label>
                            <input class="input" type="text" id="servicetype" name="servicetype" placeholder="Your service type.." required>
                            <div class="error"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
<!--=================================================Password==============================================================-->                
            <div class="password__details">
                <div class="input__fields">
                    <label for="password">Password</label>
                    <input class="input" type="password" id="password" name="password" placeholder="Your password.." required>
                    <div id="error_password" class="error"></div>
                </div>
                <div class="input__fields">
                    <label for="cpassword">Confirm Password</label>
                    <input class="input" type="password" id="cpassword" name="cpassword" placeholder="Confirm password.." required>
                    <div class="error"></div>
                </div>                  
                <div>
                    <button class="submit__button" type="submit" name="submit">Sign Up</button>
                </div>
                <p>Are You Already Have An Account? <a href="DriverSignIn.php">Sign In</a></p>
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

