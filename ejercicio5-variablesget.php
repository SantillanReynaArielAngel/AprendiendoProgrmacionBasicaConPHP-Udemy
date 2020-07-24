<?php 

var_dump($_GET);//Esto nos muestra en un array los datos que se envie por la url. Ejemplo (http://localhost:3000/ejercicio5-variablesget.php?numero=3)
//  Usando "?" podemos enviar una variable con algn valor (?numero=3)

echo " <br> Se utiliza X_GET['indice_del_array'] para ver los datos que pasan por la url";

//comprovaremos que lo que nos pasen por la url se un numero
if(isset($_GET["numero"]) && is_numeric($_GET["numero"]))
{
    $numero=$_GET["numero"];
}else{
    $numero=5;
    echo "Numero por Defecto: ".$numero;
}


echo "<h2>Tabla de multiplicar de ".$numero." </h2>";
for ($i=1; $i<=10; $i++)
{
    echo $numero." x ".$i." = ".($numero*$i)."<br>";
}
?>