<?php

echo  "Bem vindo(a) ao screen match \n";

$nameFilme = $argv[1] ?? "Não Consta";
$yearOfRelease = $argv[2] ?? "Não Consta";
$notesAmount = $argc - 3;
$sumNotes = 0;
$includedInIhePlan = true;

for($amount = 3; $amount < $argc; $amount ++){
    $sumNotes += $argv[$amount];
}

$filmeReview = $sumNotes/$notesAmount;

$classFilme = match ($nameFilme){
    "Thor" => "Aventura",
    "Interestelar" => "Ficção",
    "Supernatural" => "Terror",
    default => "Não consta"
};

if ($yearOfRelease <= 2022) {
    echo "Esse filme teve lançamento a \n" . 2025-$yearOfRelease . " anos então ele é velho \n";
} elseif ($yearOfRelease >= 2023 && $yearOfRelease <= 2024) {
    echo "Esse filme teve lançamento a \n" . 2025-$yearOfRelease . " anos então ele é recente \n";
} else {
    echo "Esse filme é lançamento\n";
}

echo "O nome do filme é " . $nameFilme . "\n" . "O ano de lançamento é " . $yearOfRelease . "\n" . "Sua avalição é " . number_format($filmeReview, 1, ',', '.') . "\n" . "Gênero do filme é " . $classFilme;
