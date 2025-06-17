<?php

$amoutNumber = array_slice($argv, 1);
$numbertransformation = array_map('floatval', $amoutNumber);
$acountNumbers = count($numbertransformation);
$sumNumbers = array_sum($numbertransformation);
$operationValue = $sumNumbers / $acountNumbers;

echo "A média é: " . $operationValue;