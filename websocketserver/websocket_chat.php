<?php

use Workerman\Worker;

require_once __DIR__.'/../vendor/autoload.php';




$ws_worker = new Worker('websocket://0.0.0.0:2347');


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
    echo $data;
    $json = json_decode($data);

    foreach ($ws_worker->connections as $conn) {
        if ($json->client == $conn->clientId) {
            $mesjson = json_encode(array(
                "message" => $json->message,
                "user_id" => $json->user_id
            ));
            echo $mesjson;
            $conn->send($mesjson);
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