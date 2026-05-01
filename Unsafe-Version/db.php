<?php
//this file is used to connect our page to unsafe_db

$conn = mysqli_connect("if0_41021988", "root", "", "unsafe_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 