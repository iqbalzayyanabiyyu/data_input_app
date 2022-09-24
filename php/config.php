<?php 

$server = "localhost";
$username = "webcompany";
$password = "webcompany";
$database = "data_user_company";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>