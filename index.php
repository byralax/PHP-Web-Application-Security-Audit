<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Security Audit</title>
</head>
<body>
    <h1>Welcome to the PHP Web Application</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Login">
    </form>

    <h2>Contact Us:</h2>
    <form action="contact.php" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Send">
    </form>
</body>
</html>
