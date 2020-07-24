<?php
//Los arrrays empiezan desde el indice 0.
    $meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
/*
    for ($i=0; $i<=11; $i++)
    {
        echo $meses[$i]."<br>";
    }
  */
  
    echo "<h2>Utilizando el metodo count()</h2>";
    //count(), devuelve el numero de elementos del array.
    echo "count(array): ".count($meses)."<p>";

    //se coloca -1 ya que count devuelve 12; pero un array se cuenta desde el indice cero.
    //Tambien podria ser variable<count(array)

    for($a=0; $a<=count($meses)-1; $a++)
    {
        echo $meses[$a].'<br>';
    }


    echo '<h2>AHORA CON EL METODO sizeof()</h2>';
    echo "sizeof(array): ".sizeOf($meses)."<p>";
    for($a=0; $a<=sizeof($meses)-1; $a++)
    {
        echo $meses[$a].'<br>';
    }
?>