<?php

include('consulta/Consultar_copia.php');
include('impressoras/impressoras_pavuna.php');
include('teste_ping/ping.php');

foreach($ip_impressoras as $ip){
    $result = checkPrinterConnection($ip);
    if($result){
        echo "[ CGA ] - Impressora $ip :";
        $consultar = contadorcopy($ip).'<br>';
    }else{
        echo "[ CGA ] - Impressora $ip : Falha na Conexão <br>";
        continue;
    }
}
