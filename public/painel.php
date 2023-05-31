<?php 
include('../app/impressoras/impressoras.php');
include('../app/consulta/Consultar_copia.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Painel impressoras</title>
</head>
<body>

<div class="title-painel">
    PAINEL IMPRESSORA
</div>

    <div class="container py-4" align="center">
        <div class="row">
        <?php

            foreach($ip_impressoras as $impressora){
                         
              ?>
               <div class="col-sm fundo-box">
               <p class="box-title-ip"><?php echo "IP: " . $impressora; ?></p>
                <Br>
              <img src="img/ricoh5210sf.gif" alt="img" width="200px"><br>
             <p class="contador-box">
             <?php echo "Contador: " . $contador = contadorcopy($impressora); ?>
             </p>
              
              
              
              </div>
              <?php
                
        
            };

        ?>
        </div>
            
        </div>
 
</body>
</html>