<?php

include('consulta/Consultar_copia.php');
include('impressoras/impressoras.php');

foreach($ip_impressoras as $ip){
    echo "Impressora $ip :";
    $consultar = contadorcopy($ip).'<br>';
}
