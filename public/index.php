<?php

date_default_timezone_set('America/Sao_Paulo');

include('../app/consulta/Consultar_copia.php');
include('../app/impressoras/impressoras.php');
include('../app/teste_ping/ping.php');
include('../app/conexao/envia_banco.php');

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
echo "Ultima Atualização : " . date('Y-m-d H:i:s');
?>
<script>
  setTimeout(function() {
    location.reload();
  }, 600000); // 2 minutos em milissegundos
</script>