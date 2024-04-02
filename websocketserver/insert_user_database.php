
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "qwerty";
$dbname = "androidchat";
$user_key = $_POST["user_id"]; 

// // $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbshema);
$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "UPDATE users SET clientId='".$_POST["client_id"]."' WHERE id='".$_POST["user_id"]."'";
@mysqli_query($conn, $query);

