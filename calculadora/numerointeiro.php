<?php
    if (isset($_GET["numero"])) 
    {
        $numero = intval($_GET["numero"]);

        if (is_numeric($numero) && $numero >= 0) 
        {
            $fatorial = 1;
            $i = 1;

            while ($i <= $numero) 
            {
                $fatorial *= $i;
                $i++;
            }

            echo "<p>$numero! = $fatorial</p>";
        } 

        else 
        {
            echo "<p>Por favor, insira um número inteiro não negativo.</p>";
        }

    }
    ?>

    <p><a href="numerointeiro.html">Calcular outro fatorial</a></p>    