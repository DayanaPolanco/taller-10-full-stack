<?php
// DECLARACION DE VARIABLES
$Number1 = 0;
$Number2 = 0;

// PROCESO
echo "Ingrese el primer número a sumar: " . "\n";
fscanf(STDIN, "%d", $Number1);
echo "Ingrese el segundo número a sumar: ". "\n";
fscanf(STDIN, "%d", $Number2);

$add = $Number1 + $Number2;

// SALIDA
echo "El resultado de la suma es: " . "\n" . $add;