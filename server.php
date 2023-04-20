#!/usr/bin/env php
<?php

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

require __DIR__ . '/vendor/autoload.php';
require 'Socket/Chat.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat
        )
    ),
    8080
);
$server->run();
