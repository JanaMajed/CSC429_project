<?php
session_set_cookie_params([ //session cookie settings to protect the session token
 'secure' => true,
 'httponly' => true,
 'samesite' => 'Strict'
]);

session_start();
include "db.php";
$secret_key = "12345678901234567890123456789012"; //secret key for encryption

function encryptData($data, $key) {
    $cipher = "AES-256-CBC"; // symmetric block cipher encryption
    $iv = random_bytes(openssl_cipher_iv_length($cipher));
    $encrypted = openssl_encrypt($data, $cipher, $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $credit_card = encryptData($_POST["credit_card"], $secret_key); //encryption of credit card number

    // Secure password handling: password is hashed using bcrypt before storing
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Parameterized query prevents SQL injection by separating data from the query
    $stmt = mysqli_prepare($conn,
        "INSERT INTO users (username, password, email, credit_card, role) VALUES (?, ?, ?, ?, 'user')"
    );

    mysqli_stmt_bind_param($stmt, "ssss",
        $username, $hashed_password, $email, $credit_card
    );

    if (mysqli_stmt_execute($stmt)) {
        $message = "Registration successful!";
        header("Location: login.php");
        exit();
    } else {
        $message = "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
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
 <div class="navbar">
    <a href="homepage/index.php">Home</a>
    <a href="login.php">Login</a>
</div>
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
                <p class="message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>

