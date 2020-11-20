<?php

$nome = $_GET["nome"];
$salario = $_GET["salario"];
$percentual = $_GET["percentual"];

$novosalario = $salario * (($percentual/100)+1);
echo "O Salário é R$" .$salario;
echo "<br>"; 
echo "O Percentual é de " .$percentual."%";
echo "<br>";
echo "O novo salário será de R$:" .$novosalario; 


