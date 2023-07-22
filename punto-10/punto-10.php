<?php
// Inicializamos la variable para empezar desde el número 1
$num = 1;

// Iteramos mientras el número sea menor o igual a 100
while ($num <= 100) {
    // Comprobamos si el número es par
    if ($num % 2 == 0) {
        // Mostramos el número par
        echo $num . " " . "-" . " ";
    }

    // Incrementamos el número para pasar al siguiente
    $num++;
}
?>