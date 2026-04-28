<?php
session_start();
include "db.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $credit_card = $_POST["credit_card"];

    // Vulnerable to SQL injection because user input is inserted directly into the query
    // Insecure password handling: password is stored as plain text (no hashing)
    // Sensitive data is stored in plain text (email and credit card)
    $sql = "INSERT INTO users (username, password, email, credit_card, role) 
            VALUES ('$username', '$password', '$email', '$credit_card', 'user')";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration successful!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <h1>Register</h1>
            <form method="POST" action="">
                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="credit_card">Credit Card</label>
                <input type="text" id="credit_card" name="credit_card" placeholder="Enter your credit card number" required>

                <button type="submit">Register</button>
            </form>

            <?php if ($message != ""): ?>
                <p class="message"><?php echo $message; ?></p>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>
