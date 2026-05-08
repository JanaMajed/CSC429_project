<?php
session_set_cookie_params([ //session cookie settings to protect the session token
 'secure' => true, //ensures the session cookie is only transmitted over HTTPS connections
 'httponly' => true,//prevents JavaScript from accessing the session cookie
 'samesite' => 'Strict' //prevents the browser from sending the cookie in cross-site requests
]);

session_start();
include "db.php";
 

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Parameterized query prevents SQL injection by separating data from the query
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        // Secure password handling: verifies the bcrypt hashed password
        if (password_verify($password, $row["password"])) {

            session_regenerate_id(true); // generates a new session ID after login to prevent fixation attacks
 

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

    } else {
        $message = "Invalid username or password.";
    }

    mysqli_stmt_close($stmt);
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
                <p class="message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
