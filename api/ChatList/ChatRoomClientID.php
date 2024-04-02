<?php

$servername = "127.0.0.1";
$username = "root";
$password = "qwerty";
$dbname = "androidchat";
$clientID = $_POST['clientID'];
$user = $_POST['user_id'];

// // $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbshema);
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
echo "ошибка";
}

$query = "UPDATE users SET clientId='".$clientID."' WHERE id = '".$user."'";
$sql = @mysqli_query($conn, $query);

?>