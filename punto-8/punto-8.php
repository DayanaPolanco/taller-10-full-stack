<?php
// Constante del valor por persona
const TICKET_PRICE = 25000;
// Obtener el tipo de afiliación y el número de personas ingresados por el usuario
echo "Ingrese el tipo de afiliación (A, B, C o D): " . "\n";
$MembershipType = trim(fgets(STDIN));
echo "Ingrese el número de personas: " . "\n";
$personNumber = intval(trim(fgets(STDIN)));
// Calcular el total sin descuento
$totalPay = $personNumber * TICKET_PRICE;
// Calcular el descuento según el tipo de afiliación
$discount = 0;
switch (strtoupper($MembershipType)) {
    case 'A':
        $discount = 0.3;
        break;
    case 'B':
        $discount = 0.23;
        break;
    case 'C':
        $discount = 0.1;
        break;
    case 'D':
        $discount = 0.05;
        break;
    default:
        echo "Tipo de afiliación no válido. Por favor, ingrese un tipo válido (A, B, C o D)" . "\n";
        exit;
}
// Calcular el total con descuento
$totalPayDiscount = $totalPay - ($totalPay * $discount);
// Mostrar el resultado
echo "El valor total de las entradas a la bolera es: ". "\n" . $totalPayDiscount;
?>