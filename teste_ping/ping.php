<?php

function checkPrinterConnection($ip, $port = 9100) {
    $timeout = 1; // Tempo limite de conexão em segundos

    $socket = @fsockopen($ip, $port, $errno, $errstr, $timeout);
    
    if ($socket) {
        fclose($socket);
        return true;
    } else {
        return false;
    }
}
?>