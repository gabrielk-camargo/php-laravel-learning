<?php

$temperature = $argv[1] ?? "Escreva um valor:";
$temperatureConvertion = ($temperature*1.8) + 32;

echo "A temperatura e Celcius " . $temperature . " é igual a " . $temperatureConvertion . " em fahrenheit";