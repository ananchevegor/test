<?php
header("Access-Control-Allow-Origin: http://localhost");
    $user_id = $_POST['user_id'];
    $companion_id = $_POST['companion_id'];
    $message = $_POST['message'];
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

    $query = "CALL MessegeChatRoom(".$user_id.",".$companion_id.",'".$message."');";
    $sql = @mysqli_query($conn, $query);
    if ($sql !== NULL) {
        echo "success";
    } else {
        echo "error";
    }
?>