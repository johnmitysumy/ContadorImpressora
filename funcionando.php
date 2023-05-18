<?php
// Endereço IP da impressora
$ip_address = '192.168.1.141';

// Comunidade SNMP da impressora
$community = 'public';

// OID do contador de impressão
$print_counter_oid = '1.3.6.1.2.1.43.10.2.1.4.1.1';

// OID do status da impressora
$printer_status_oid = '1.3.6.1.2.1.25.3.5.1.1.1';

// Conexão SNMP
$snmp = new SNMP(SNMP::VERSION_2C, $ip_address, $community);

// Obter o contador de impressão
$print_counter = $snmp->get($print_counter_oid);

// Obter o status da impressora
$printer_status = $snmp->get($printer_status_oid);

// Exibir o contador de impressão e o status
echo 'Contador de impressão: ' . $print_counter . '<br>';
echo 'Status da impressora: ' . $printer_status . '<br>';


// OIDs para obter o nível de toner
$oid_toner = "1.3.6.1.4.1.367.3.2.1.2.24.1.1.5.1";

// Obter o nível de toner
$toner_levels = snmp2_walk($ip_address, $community, $oid_toner);

// Imprimir o nível de toner para cada cartucho de toner presente na impressora
foreach ($toner_levels as $toner_level) {
    echo "Nível de toner: ".$toner_level."\n";
}

?>
