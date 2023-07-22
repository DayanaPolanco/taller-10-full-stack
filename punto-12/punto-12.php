<?php
// Se pide por consola el numero al usuario
echo "Ingrese el número que desea multiplicar: ". "\n";
$number = intval(fgets(STDIN));
echo "Tabla de multiplicar del cero hasta el 30". "\n";
for ($i = 0; $i <= 30; $i++) {
    echo "$number x $i = " . ($number * $i) . "\n";
}
?>