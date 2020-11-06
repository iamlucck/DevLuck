<?php
        $ValorA = $_GET["ValorA"];
        $ValorB = $_GET["ValorB"];

        if(isset($_GET["Somar"]));
            $operacao = $valorA + $valorB;
            print("A Soma é:  " .$operacao);
        if(isset($_GET["Subtrair"]));
            $operacao = $valorA - $valorB;
            print("A Subtração é:  " .$operacao);

        if(isset($_GET["Multiplicar"]));
            $operacao = $valorA * $valorB;
            print("A Multiplicação é:  " .$operacao);

        if(isset($_GET["Dividir"]));
            $operacao = $valorA / $valorB;
            print("A divisão é:  " .$operacao);


?>