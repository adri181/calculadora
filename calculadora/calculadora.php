<h1>Resultado da Tabuada</h1>

<?php
if (isset($_GET["numero"])) 
{
    $numero = intval($_GET["numero"]);

    if (is_numeric($numero)) 
    {
        echo "<p>Tabuada do $numero:</p>";
        $i = 0;

        while ($i <= 10) 
        {
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";
            $i++;
        }

    } 
    
    else 
    {
        echo "<p>Por favor, insira um número válido.</p>";
    }
}
?>

<p><a href="calculadora.html">Calcular outra tabuada</a></p>