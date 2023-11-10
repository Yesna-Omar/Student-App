<!-- copy the contents of your previous dbCongig file -->

<?php

$hn = "localhost";
$un = "student_admin";
$pw = "[wU9S/w_6xz(b_N!";
$db = "student_app";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>