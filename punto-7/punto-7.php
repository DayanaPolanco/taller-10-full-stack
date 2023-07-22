<?php
// Obtener los números ingresados por el usuario
echo "Ingrese el primer número: " . "\n";
$numberOne = trim(fgets(STDIN));
echo "Ingrese el segundo número: " . "\n";
$numberTwo = trim(fgets(STDIN));
// Mostrar opciones de operaciones
echo "Ingrese el número de la operación deseada (1, 2, 3 o 4): " . "\n";
echo "1. Sumar". "\n";
echo "2. Restar". "\n";
echo "3. Multiplicar". "\n";
echo "4. Dividir". "\n";
// Obtener la opción seleccionada por el usuario
$option = trim(fgets(STDIN));
// Realizar la operación seleccionada
$result = 0;
switch ($option) {
    case 1:
        $result = $numberOne + $numberTwo;
        break;
    case 2:
        $result = $numberOne - $numberTwo;
        break;
    case 3:
        $result = $numberOne * $numberTwo;
        break;
    case 4:
        if ($numberTwo != 0) {
            $result = $numberOne / $numberTwo;
        } else {
            echo "No es posible dividir entre cero.\n";
            exit;
        }
        break;
    default:
        echo "Opción no válida. Por favor, escoja una opción válida (1, 2, 3 o 4).\n";
        exit;
}
// Mostrar el resultado
echo "El resultado de la operación es: " . $result . "\n";
?>