<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "busify_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$userPassword = mysqli_real_escape_string($conn, $_POST['password']);  // Changed variable name to avoid conflict
$confirmPassword = mysqli_real_escape_string($conn, $_POST['cpassword']);  // Changed variable name to avoid conflict

// Insert data into the database
$insert_query = "INSERT INTO passenger_signup (fname, lname, phone, email, password, cpassword) VALUES ('$fname', '$lname', '$phone', '$email', '$userPassword', '$confirmPassword')";

//if data inserted successfully, then redirect to login page
if ($conn->query($insert_query) === TRUE) {
    header("Location: PassengerSignIn.php");
} else {
    echo "Error: " . $insert_query . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
