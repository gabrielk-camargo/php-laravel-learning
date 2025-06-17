<?php

$year = $argv[1];
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0){
    echo "Esse ano é bisexto";
}else{
    echo "Esse ano não é bis";
}