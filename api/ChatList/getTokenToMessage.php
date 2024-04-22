<?php

  $id = $_POST['companion_id'];
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

$query = "SELECT name, token FROM users WHERE id='".$id."'";
$sql = @mysqli_query($conn, $query);
while ($row = @mysqli_fetch_array($sql)) {
    
    $json[] = array(
      "name" => $row['name'],
      "token" => $row['token']
    );
    
    
  }
echo json_encode($json);
  
?>