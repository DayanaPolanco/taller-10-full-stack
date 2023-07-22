<?php
// Obtener el nombre y apellido del usuario
echo "Ingrese su nombre: ". "\n";
$nombre = trim(fgets(STDIN));

echo "Ingrese su apellido: ". "\n";
$apellido = trim(fgets(STDIN));

// Mostrar el nombre y apellido ingresados
echo "Nombre: " . $nombre . "\n";
echo "Apellido: " . $apellido . "\n";
?>