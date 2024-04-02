<?php

use Workerman\Worker;

require_once __DIR__.'/../vendor/autoload.php';




$ws_worker = new Worker('websocket://0.0.0.0:2346');


$ws_worker->count=4;

// Emitted when new connection come
$ws_worker->onConnect = function ($connection) use ($ws_worker) {
    $connection->clientId = uniqid();
    $ws_worker->clients[$connection->clientId] = $connection;
    $connection->send(json_encode(array(
        "clientID" => $connection->clientId
    )));    
};

// Emitted when data received
$ws_worker->onMessage = function ($connection, $data) use ($ws_worker) {
    $json = json_decode($data);
    foreach ($ws_worker->connections as $conn) {
        if ($json->clientID == $conn->clientId) {
            $conn->send(json_encode(array(
                "username" => $json->username,
                "password" => $json->password
            )));
        }
    }
};

// Emitted when connection closed
$ws_worker->onClose = function ($connection) {
    echo "Connection closed\n";
};

// Run worker
Worker::runAll();

?>