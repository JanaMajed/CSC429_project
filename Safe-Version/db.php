<?php
//this file is used to connect our page to safe_db

$conn = mysqli_connect("sql312.infinityfree.com", "if0_41021988", "rehaf123rehaf", "if0_41021988_safe_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 
