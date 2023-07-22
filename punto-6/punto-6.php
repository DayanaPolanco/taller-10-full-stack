<?php
// Obtener el nombre y la edad del usuario
echo "Ingrese su nombre: " . "\n";
$name = trim(fgets(STDIN));

echo "Ingrese su edad: ". "\n";
$age = intval(trim(fgets(STDIN)));

// Verificar si es mayor o menor de edad
$message = "";
if ($age >= 18) {
    $message = "Usted es mayor de edad.". "\n";
} else {
    $message = "Usted es menor de edad.". "\n";
}

// Mostrar el mensaje
echo "Hola, $name. $message\n";
?>