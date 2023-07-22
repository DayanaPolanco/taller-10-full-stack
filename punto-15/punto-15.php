<?php
function sum($numberOne, $numberTwo) {
    return $numberOne + $numberTwo;
}
function subtract($numberOne, $numberTwo) {
    return $numberOne - $numberTwo;
}
function multiply($numberOne, $numberTwo) {
    return $numberOne * $numberTwo;
}
function splitt($numberOne, $numberTwo) {
    if ($numberTwo != 0) {
        return $numberOne / $numberTwo;
    } else {
        return "Error: No se puede dividir por cero.";
    }
}
echo "Ingrese el primer número: " . "\n";
fscanf(STDIN, "%f", $numberOne);
echo "Ingrese el segundo número: " . "\n";
fscanf(STDIN, "%f", $numberTwo);
echo "Seleccione una operación (1)sumar, (2)restar, (3) multiplicar, (4) dividir: " . "\n";
fscanf(STDIN, "%s", $operation);
switch ($operation) {
    case '1':
        $result = sum($numberOne, $numberTwo);
        break;
    case '2':
        $result = subtract($numberOne, $numberTwo);
        break;
    case '3':
        $result = multiply($numberOne, $numberTwo);
        break;
    case '4':
        $result = splitt($numberOne, $numberTwo);
        break;
    default:
        $result = "Operación inválida.";
        break;
}
echo "Resultado: " . "\n" . $result;
?>