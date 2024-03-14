<?php
$servername = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_error()) {
    die("Connection failed: " . $conn->connect_error);
}
