<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// creating obj of mysqli class
$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
else {
    mysqli_select_db($conn, $dbname);
    // echo "Connection Established";
}
?>