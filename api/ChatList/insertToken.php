<?php

  $id = $_POST['user_id'];
  $token = $_POST['token'];
  $servername = "127.0.0.1";
  $username = "root";
  $password = "qwerty";
  $dbname = "androidchat";
  
  // // $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbshema);
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    echo "ошибка";
  }

$query = "UPDATE users SET token='".$token."' WHERE id='".$id."'";
$sql = @mysqli_query($conn, $query);
  
?>