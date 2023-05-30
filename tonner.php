<?php

// Endereço IP da impressora
$ip_address = "192.168.1.143";

// Comunidade SNMP da impressora
$community = "public";

// OID para obter o nível de toner do cartucho preto
$oid_toner_black = "1.3.6.1.2.1.43.11.1.1.9.1.4.1";

// Função para obter o nível de toner de um determinado OID
function getTonerLevel($ip_address, $community, $oid) {
    $snmp_result = snmpget($ip_address, $community, $oid);
    $toner_level = explode(" ", $snmp_result)[3]; // Extrai o valor do nível de toner
    return $toner_level;
}

// Obter o nível de toner do cartucho preto
$toner_level_black = getTonerLevel($ip_address, $community, $oid_toner_black);

// Imprimir o nível de toner do cartucho preto
echo "Nível de Toner (Cartucho Preto): ".$toner_level_black."%\n";
