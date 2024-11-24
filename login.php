<?php
include 'config.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // SQL Injection Vulnerability: Directly embedding user input in the query
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Logged in successfully!";
    } else {
        echo "Invalid username.";
    }
} else {
    echo "Please enter a username.";
}
?>
