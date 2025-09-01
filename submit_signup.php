
<?php
include "connect.php";

// Get form data
$number = $_POST['number'];
$password = $_POST['password'];

// Check if user already exists
$sql = "SELECT * FROM logins WHERE number = '$number'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "User already exists!";
} else {
    // Insert data into database
    $sql = "INSERT INTO logins (number, password) VALUES ('$number', '$password')";
    if (mysqli_query($conn, $sql)) {
        header('Location: restaurants.html');
        exit;
    } else {
        echo "Error signing up: " . mysqli_error($conn);
    }
}

$conn->close();
?>