<?php
// Definimos el arreglo numérico de 5 posiciones
$numbers = array(6, 12, 5, 20, 100);
// Inicializamos una variable para almacenar la suma
$sum = 0;
// Iteramos sobre el arreglo utilizando un bucle for
for ($i = 0; $i < count($numbers); $i++) {
    // Sumamos cada número al valor de la variable $suma
    $sum += $numbers[$i];
}
// Mostramos el resultado de la suma
echo "La suma de los números del arreglo es: " . "\n" . $sum;
?>