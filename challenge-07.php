<?php

$weight = $argv [1];
$height = $argv [2];

$imc = $weight / ($height ** 2);

echo match (true) {
    $imc < 18.5               => "Abaixo do peso",
    $imc <= 24.9              => "Peso normal",
    $imc <= 29.9              => "Sobrepeso",
    $imc <= 39.9              => "Obesidade grau II",
    default                   => "Obesidade grau III",
};
