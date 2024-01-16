



<?php
$phone = $_POST['phone'];
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


$query = "INSERT INTO users(name, `surname`, `country_id`, `phone`, `lastmessage`) VALUES ('name','surname','0','".$phone."','***')";
$sql = @mysqli_query($conn, $query);
if ($sql !== NULL) {
    echo "true";
} else {
    echo "false";
}





?>