<?php

date_default_timezone_set("America/Sao_Paulo");
#$date = date("H:i:s");
$hora = (int) date("H"); 

echo match (true) {
    $hora < 12        => 'Bom dia',      
    $hora < 18        => 'Boa tarde',    
    default           => 'Boa noite',
};
