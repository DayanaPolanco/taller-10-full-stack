<?php
// Obtener el nombre y apellido del usuario
echo "Ingrese su nombre: ". "\n";
$name = trim(fgets(STDIN));

echo "Ingrese su apellido: ". "\n";
$lastName = trim(fgets(STDIN));

// Mostrar el nombre y apellido ingresados
echo "Nombre: " . $name . "\n";
echo "Apellido: " . $lastName. "\n";
?>