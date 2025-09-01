<?php
include "connect.php";

// Get form data
$name = $_POST['name'];
$address = $_POST['address'];
$mobile_number = $_POST['mobile'];
$order_name = $_POST['order'];
$quantity = $_POST['quantity'];
$payment_method = $_POST['payment'];

// Insert data into database
$sql = mysqli_query($conn,"INSERT INTO orders (name, address, mobile_number, order_name, quantity, payment_method) VALUES ('$name', '$address', '$mobile_number', '$order_name', '$quantity', '$payment_method')");

if ($sql) {
    // Display popup message and redirect to home.html after 5 seconds
    echo "<script>
            alert('Your Order Has Been Placed, Our team will contact you soon.');
            setTimeout(function() {
                window.location.href = 'home.html';
            }, 1000);
        </script>";
} else {
    // Display error message
    echo "Error submitting order: " . mysqli_error($conn);
}

$conn->close();
?>