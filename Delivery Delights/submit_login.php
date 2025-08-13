<?php
include "connect.php";

// Get form data
$number = $_POST['number'];
$password = $_POST['password'];

// Check if user exists in database
$sql = "SELECT * FROM logins WHERE number = '$number' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists, redirect to restaurants.html
    header('Location: restaurants.html');
    exit;
} else {
    // User doesn't exist, display error message
    echo "Invalid phone number or password";
}

$conn->close();
?>