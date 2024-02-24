<?php
$conn = new mysqli("localhost", "root", "", "real-estate");

// Get data from the AJAX request
$userId = $_POST["userId"];

// Update data in the users table
$sql = "UPDATE `user` SET `username`='$username', `role`='$role', `email`='$email', `password`='$password' WHERE `id` = $userId";

if ($conn->query($sql) === TRUE) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>