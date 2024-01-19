<?php

use Workerman\Worker;

require_once __DIR__.'/../vendor/autoload.php';




$ws_worker = new Worker('websocket://0.0.0.0:2346');


$ws_worker->count=4;

// Emitted when new connection come
$ws_worker->onConnect = function ($connection) {
    echo "new connection";
};

// Emitted when data received
$ws_worker->onMessage = function ($connection, $data) use ($ws_worker) {
    // Send hello $data

    foreach ($ws_worker->connections as $client) {
        $client->send($data);
    }

    
};

// Emitted when connection closed
$ws_worker->onClose = function ($connection) {
    echo "Connection closed\n";
};

// Run worker
Worker::runAll();

?>