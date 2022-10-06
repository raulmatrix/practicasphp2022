<?php

function sumar($valor1,$valor2){

    return $valor1+$valor2;
}

function devolverNombre($escribirNombre){

    echo "Tu nombre es: ".$escribirNombre;
}

echo sumar(3,7);

devolverNombre("Raul");
?>