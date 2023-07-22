<?php
// Inicializamos una variable para almacenar la suma de los números pares
$suma = 0;

// Iteramos del 1 al 100 utilizando un bucle for
for ($num = 1; $num <= 100; $num++) {
    // Comprobamos si el número es par
    if ($num % 2 == 0) {
        // Mostramos el número par
        echo $num . " " . "-" . " ";
        

        // Sumamos el número par a la variable $suma
        $suma += $num;
    }
}
echo "\n";
echo "\n";
// Mostramos la suma de los números pares
echo  "La suma de los números pares es: ". "\n" . $suma;
?>