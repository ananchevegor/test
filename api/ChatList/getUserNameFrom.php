<?php

$servername = "127.0.0.1";
$username = "root";
$password = "qwerty";
$dbname = "androidchat";
$user = $_POST['user_id'];

// // $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbshema);
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
echo "ошибка";
}

$query = "SELECT name FROM users WHERE id = '".$user."'";
$sql = @mysqli_query($conn, $query);
echo @mysqli_fetch_assoc($sql)['name'];

?>