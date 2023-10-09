<?php

    if (isset($_GET["valor_investimento"])) 
    {
        $valor_investimento = floatval($_GET["valor_investimento"]);
        
        if (is_numeric($valor_investimento) && $valor_investimento >= 0) 
        {
            echo "<p>Depósito inicial: " . number_format($valor_investimento, 2, ',', '.') . "</p>";
            $dia = 1;
            
            while ($dia <= 30) 
            {
                $valor_investimento *= (1 + 0.00008); 
                echo "<p>Dia $dia - " . number_format($valor_investimento, 2, ',', '.') . "</p>";
                $dia++;
            }

        } 
        
        else 
        {
            echo "<p>Por favor, insira um valor de investimento válido.</p>";
        }

    }
    ?>

    <p><a href="financeiro.html">Calcular outro investimento</a></p>