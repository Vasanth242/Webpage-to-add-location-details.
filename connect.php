<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "designation";

$con = mysqli_connect($host, $user, $password, $db);

if ($con) {
} else {
    die("Error: Could not connect to the database. Please try again later.");
}
