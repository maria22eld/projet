<?php
// Database configuration
$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $specialty = $_POST["specialty"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Insert new doctor into the database
    $sql = "INSERT INTO doctors (name, specialty, email, phone) VALUES ('$name', '$specialty', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Doctor added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
