<?php
// DECLARACION DE VARIABLE DE ENTRADA
const TICKET_PRICE = 25000;
$MembershipType = "";
$personNumber = 0;

// PROCESO
echo "Ingrese su tipo de afiliación (A o B): ". "\n";
fscanf(STDIN, "%s", $MembershipType);
echo "Ingrese el número de personas: ". "\n";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET_PRICE;
if ($MembershipType == "A" || $MembershipType == "B") {
    $totalPay = $totalPay - ($totalPay * 0.3);
} else {
    echo "Usted no cuenta con membresía válida para obtener un descuento.\n";
}
echo "El total a pagar es " . $totalPay . "\n";
?>