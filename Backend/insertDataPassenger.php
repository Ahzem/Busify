<?php
require_once '../Frontend/ConnectDB.php';

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
                window.location.href='Search&Track.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO passenger_signup (fname, lname, phone, email, password) VALUES ('$fname', '$lname', '$phone', '$email', '$password')";
            if ($result = mysqli_query($conn, $query)) {
                echo "
                <script>
                    alert('User created successfully.');
                    window.location.href='PassengerSignIn.php';
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