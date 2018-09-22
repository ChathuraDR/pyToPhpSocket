#!/usr/bin/php

<?php

$host = "127.0.0.1";
$port = 60000;
// No Timeout
set_time_limit(0);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");   // Create socket

$result = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");      // Bind the socket to port and host

$result = socket_listen($socket, 3) or die("Could not set up socket listener\n");       // Start listening to the socket



while(true){

    $spawn = socket_accept($socket) or die("Could not accept incoming connection\n");       // Accept incoming connection
    $input = socket_read($spawn, 1024) or die("Could not read input\n");                    // Read the message from the Client socket
    $output = $input . "\n";
    echo $output;
    socket_close($spawn);
}

?>