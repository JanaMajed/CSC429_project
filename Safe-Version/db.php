<?php
//this file is used to connect our page to safe_db

$conn = mysqli_connect("localhost", "root", "", "safe_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 
