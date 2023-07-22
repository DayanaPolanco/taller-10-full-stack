<?php
//DECLARATION OF FUNCTIONS
function hasSecurityLong($pass) {
    return strlen($pass) >= 8;
}

function hasUpperLetter($pass) {
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter) {
        if ($letter === strtoupper($letter)) {
            return true;
        }
    }
    return false;
}

function hasNumber($pass) {
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter) {
        if (is_numeric($letter)) {
            return true;
        }
    }
    return false;
}

//DECLARATION OF VARIABLES 
$password = "";

//PROCESS
echo "Ingresar la clave a registrar: " . "\n";
fscanf(STDIN, "%s", $password);

if (hasSecurityLong($password)) {
    if (hasUpperLetter($password)) {
        if (hasNumber($password)) {
            echo "Felicidades su contraseña es segura y ha quedado registrada!";
        } else {
            echo "Cuidado, su contraseña no es segura! Su contraseña debe tener al menos un número.";
        }
    } else {
        echo "Cuidado, su contraseña no es segura! Su contraseña debe tener al menos una letra mayúscula.";
    }
} else { 
    echo "Cuidado, su contraseña no es segura! Su contraseña debe tener al menos 8 caracteres.";
}