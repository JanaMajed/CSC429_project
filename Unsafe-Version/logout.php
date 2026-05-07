<?php
session_start();
// Remove all session data and log the user out
session_unset();
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
