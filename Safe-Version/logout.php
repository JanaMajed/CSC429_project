<?php
session_start();

// Remove all session data
$_SESSION = [];

// Delete the session cookie from the browser
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();

    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Completely destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>

    <link rel="stylesheet" href="styles.css">

   <!-- Redirect user to login page after 2 seconds -->
    <meta http-equiv="refresh" content="2;url=login.php">
</head>

<body>

    <div class="logout-container">
        <h2>You have been logged out</h2>
        <p>Redirecting to login page...</p>

        <a href="login.php">Go to Login</a>
    </div>

</body>
</html>
