<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vulnerable to SQL injection because user input is inserted directly into the query (try: ' ' OR 1=1 --  in username field or ' ' OR 1=1  in both password and username field)
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
    // Insecure password handling: compares plain text password instead of using bcrypt
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        $message = "Login successful!";

         // Redirect user based on role
    if ($row["role"] == "admin") {
        header("Location: dashboard_admin.php");
        exit();
    }

    if ($row["role"] == "user") {
        header("Location: dashboard_user.php");
        exit();
    }
        
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <h1>Login</h1>
            <p class="subtitle">Welcome back</p>

            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </form>

            <?php if ($message != ""): ?>
                <p class="message"><?php echo $message; ?></p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
