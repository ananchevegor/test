<?php

$id = $_POST['user_id'];
$json = array();
$servername = "127.0.0.1";
$username = "root";
$password = "qwerty";
$dbname = "androidchat";

// // $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbshema);
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  echo "ошибка";
}

$query = "SELECT * FROM `users`";
$sql = @mysqli_query($conn, $query);
while ($row = @mysqli_fetch_array($sql)) {
  
  $json[] = array(
    "id" => $row["id"],
    "name" => $row['name'],
    "lastMessage" => $row['lastmessage']
  );
  
  
}

echo json_encode($json);


?>