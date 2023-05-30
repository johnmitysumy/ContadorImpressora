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

    // Remover o prefixo "Counter32" do resultado
    $print_counter = str_replace("Counter32:", "", $print_counter);

    // Converter o valor para inteiro
    $print_counter = intval($print_counter);

    // Exibir o contador de impressão e o status
    return $print_counter;
}