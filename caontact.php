<?php
include 'config.php';

if (isset($_POST['email']) && isset($_POST['message'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Vulnerability: Directly displaying user input without sanitizing it
    echo "<h2>Your Message:</h2>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Message: " . $message . "</p>";
} else {
    echo "Please fill out the form.";
}
?>
