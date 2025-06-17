<?php

echo  "Bem vindo(a) ao screen match \n";

$nameFilme = $argv[1] ?? "Não Consta";
$yearOfRelease = $argv[2] ?? "Não Consta";
$sumNotes = (3 + 3 + 9 + 2 + 2);
$filmeReview = $sumNotes/5 ;
$includedInIhePlan = true;

echo "O nome do filme é " . $nameFilme . "\n" . "O ano de lançamento é " . $yearOfRelease . "\n" . "E sua avalição é " . $filmeReview;
