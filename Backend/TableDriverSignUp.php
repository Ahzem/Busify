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

// Create a table named "your_table_name"
$tableName = "driver_signup";
$sql = "CREATE TABLE $tableName (
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    nic VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL PRIMARY KEY,
    from VARCHAR(30) NOT NULL,
    to VARCHAR(30) NOT NULL,
    routeno VARCHAR(30) NOT NULL,
    busmodel VARCHAR(30) NOT NULL,
    busno VARCHAR(30) NOT NULL,
    buscolor VARCHAR(30) NOT NULL,
    buscapacity VARCHAR(30) NOT NULL,
    servicetype VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    cpassword VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
