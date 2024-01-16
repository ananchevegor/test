<?php

  $user_id = $_POST['user_id'];
  $companion_id = $_POST['companion_id'];
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

  $query = "SELECT * FROM chatroom".$user_id."_".$companion_id." ORDER BY time DESC";
  $sql = @mysqli_query($conn, $query);
  while ($row = @mysqli_fetch_array($sql)) {
    $json[] = array(
      "user_id" => $row['user_id'], 
      "message" => $row['user_id_message'],
      "time" => $row["time"]
    );
  }

  echo json_encode($json);
?>