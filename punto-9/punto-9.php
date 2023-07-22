<?php
// DECLARACION DE VARIABLES DE ENTRADA
$number = 0;
$x = 0;

// PROCESO
echo "Escriba el numero a multiplicar: " . "\n";
fscanf(STDIN, "%d", $number);

while ($x <= 30) {
    $result = $number * $x;
    echo $number . " x " . $x . " = " . $result . "\n";
    $x++;
}
?>