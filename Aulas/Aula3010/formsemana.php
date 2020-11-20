<?php

$diaSemana = $_GET['diaSemana'];
$diaSemana = strtoupper($diaSemana);  

switch ($variable) {
    case 'SEGUNDA':
        print ("Segunda Feira");
        break;

    case 'TERÇA':
            print ("Terça Feira");
        break;   

    case 'QUARTA':
            print ("Quarta Feira");
        break;               
    //Fazer o resto dos dias da semana.
    default:
        print("Dia da semana não encontrado");
        break;
}


?>