<?php
session_start();


$_SESSION = [];


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


session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>

    <link rel="stylesheet" href="styles.css">

   
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
