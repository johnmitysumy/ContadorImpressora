<?php

date_default_timezone_set('America/Sao_Paulo');

include('consulta/Consultar_copia.php');
include('impressoras/impressoras.php');
include('teste_ping/ping.php');
include('conexao/envia_banco.php');

$valores = [];

foreach($ip_impressoras as $ip){
    $result = checkPrinterConnection($ip);
    if($result){
 
        $contador = contadorcopy($ip);

        enviarValorParaBanco($ip, $contador);
        
    }else{
        echo "[ CGA ] - Impressora $ip : Falha na Conexão <br>";
        continue;
    }
}

?>
<script>
  setTimeout(function() {
    location.reload();
  }, 600000); // 2 minutos em milissegundos
</script>