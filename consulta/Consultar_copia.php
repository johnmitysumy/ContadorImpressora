<?php

function contadorcopy ($ip_address){
    // Comunidade SNMP da impressora
    $community = 'public';

    // OID do contador de impressão
    $print_counter_oid = '1.3.6.1.2.1.43.10.2.1.4.1.1';

    // Conexão SNMP
    $snmp = new SNMP(SNMP::VERSION_2C, $ip_address, $community);

    // Obter o contador de impressão
    $print_counter = $snmp->get($print_counter_oid);

    // Exibir o contador de impressão e o status
    echo $print_counter . '<br>';
}