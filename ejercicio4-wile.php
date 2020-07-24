<?php
//20 primeros numeros natutrales
    $num=1;
    while($num<=20)
    {
        echo $num."<br>";
        $num=$num+1;
    }

    echo "<p>";

//tabla del 5

    $contador=1;
    $numero=5;
    while($contador<=10)
    {
        echo $numero." * ".$contador." = ".($numero*$contador)."<br>";
        $contador++;
    }

    echo "<p>";
//Multiplicar los 20 primeros numeros entre si
    $cont=1;
    $numerox=1;
    while($cont<=20)
    {
        $numerox=$numerox*$cont;
        echo $numerox."<br>";
        $cont++;
    }
?>