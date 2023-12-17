<?php
require_once '../Backend/ConnectDB.php';
if(!empty($_SESSION['email'])){
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM passenger_signup WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  type="text/css" rel="stylesheet" href="template.css">
    <link  type="text/css" rel="stylesheet" href="Search&Track.css">
</head>
<body>

<!--===============================================Header Start===============================================================-->
<header>
    <nav class="navigation">
        <img class="logo" src="Supportive Files\logo name.png" alt="Logo">
            <div class="header__quick__links">
                <a class="navigation__a" href="HomePageAfterLogIn.php">Home</a>
                <a class="navigation__a" href="HomePageAfterLogIn.php">About</a>
                <a class="navigation__a" href="HomePageAfterLogIn.php">Services</a>
                <a class="navigation__a" href="#footer">Contact</a>
                <a class="navigation__a" href="../Backend/logout.php">Logout</a>                
                <!--<button class="btnsignin-popup">Sign In</button>
                <button class="btnsignup-popup">Sign Up</button>-->
                <img class="profile__img" src="Supportive Files\R (4).jpg" alt="profile">
            </div>
    </nav>
</header>
<!--=================================================Header End===============================================================-->
<div class="welcome__user">
    <p>Hello, <?php echo $row['fname']; ?>!</p>
</div>
<div>
    <div class="head__box">
        <p>Online Seat Reservation</p>
        <div class="search__box">
            <div>
                <label>From</label>
                <input type="text" placeholder="From" required>
            </div>
            <div>
                <label>To</label>
                <input type="text" placeholder="To" required>
            </div>
            <div>
                <label>Date</label>
                <input type="date" placeholder="Date" required>
            </div>
            <div>
                <label>Time</label>
                <input type="time" placeholder="Time">
            </div>
            <div>
                <button class="search__button">Search</button>
            </div>
        </div>
    </div>
    <div class="head__box">
        <p>Track Your Bus</p>
        <div class="track__box">
            <div>
                <label>From</label>
                <input type="text" placeholder="From" required>
            </div>
            <div>
                <label>To</label>
                <input type="text" placeholder="To" required>
            </div>
            <div>
                <label>Bus Number</label>
                <input type="text" placeholder="Bus Number" required>
            </div>
            <div>
                <button class="search__button">Track</button>
            </div>
        </div>
    </div>
</div>

<!--=================================================Footer Area==============================================================-->
    <footer id="footer">
        <div class="footer">
            <div class="frame">
                <div class="footer__quick__links">
                    <a class="footer__a" href="HomePageAfterLogIn.php">Home</a>
                    <a class="footer__a" href="HomePageAfterLogIn.php">About Us</a>
                    <a class="footer__a" href="HomePageAfterLogIn.php">Privacy Policy</a>
                    <a class="footer__a" href="#DriverSignIn.php">Sign in as a Driver</a>
                    <!--<a class="footer__a" href="#">Sign in as a Passenger</a>-->
                </div>
                <div class="footer__quick__links">
                    <a class="footer__a" href="HomePageAfterLogIn.php">FAQ</a>
                    <a class="footer__a" href="#footer">Contact Us</a>
                    <a class="footer__a" href="HomePageAfterLogIn.php">Terms</a>
                    <a class="footer__a" href="DriverSignUp.php">Sign up as a Driver</a>
                    <!--<a class="footer__a" href="#">Sign up as a Passenger</a>-->
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

