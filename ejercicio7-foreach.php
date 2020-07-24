<?php
    echo '<h2>foreach: Es utilizado sobretodo en arrays</h2>';

    $dias=['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];

    echo 'Primera forma: foreach(array as valor) <br>'; 
    /*Nota: En cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array 
        avanza una posición (así en la próxima iteración se estará observando el siguiente elemento). */
    foreach($dias as $hoy)
    {
        echo $hoy."<br>";//hoy contiene el valor asignado
    }

    echo '<br> Segunda forma: forach(array as indice => valor) <br>';
    // Nota: La segunda forma además asigna la clave(indice) del elemento actual a la variable $indice en cada iteración.
    foreach($dias as $indice => $hoy)
    {
        echo "Indice: ".$indice.", valor:".$hoy."<br>";
    }

    echo '<br>';
    /* otro Ejemplo de foreach: clave y valor */
    $array = array(
        "uno" => 1,
        "dos" => 2,
        "tres" => 3,
        "diecisiete" => 17
    );

    foreach ($array as $indice1 => $valor1) {
        echo "\$array [$indice1] => $valor1 <br>";
    }
?>