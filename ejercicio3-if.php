<?php
/*
    for($x=1; $x<=30; $x++)
    {
        if($x%2==0)
        {
            echo "Cuadrado de ".$x." = ".($x*$x)." Es PAR";
        }
        else{
            echo "Cuadrado de ".$x." = ".($x*$x)." Es IMPAR";
        }
        echo "<br>";
    }
*/

    for($x=1; $x<=30; $x++)
    {   
        $cuadrado=$x*$x;
        if($cuadrado%2==0)
        {
            $dato="PAR";
        }
        else{
            $dato="IMPAR";
        }
        echo "Cuadrado de ".$x." = ".$cuadrado." y es ".$dato."<br>";
    }
?>