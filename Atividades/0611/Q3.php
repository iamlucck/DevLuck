<?php

$nome=$_GET["nome"];
$nota01=$_GET["nota1"];
$nota02=$_GET["nota2"];
$media = ($nota01 + $nota02)/2;

    if ($media < 3) {
        echo ("A sua média é:" .$media. "e você está reprovado!");
    } elseif ($media > 3 && $media < 7 ) {
        echo ("A sua média é:" .$media. " e você precisará fazer exame!");
    } else ($media >= 7 && $media <= 10) {
        echo ("A sua média é:" .$media. "e você está aprovado!");
    }
        
    
