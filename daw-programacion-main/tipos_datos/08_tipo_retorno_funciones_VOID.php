<?php

//Void no es un tipo de datos, sino un indicador de lo que devuelve o recibe una función

//invocamos dos funciones que no hacen nada:
echo "Invocanmos accionA(): " . accionA() . PHP_EOL;
echo "Invocanmos accionB(): " . accionB() . PHP_EOL;


//Declaramos una función que explícitamente indica que no devolverá nada (void)
function accionA(): void {
    // correcto
}
function accionB(): void {
    return; // correcto
}

/*
function accionC(): void {
    return null; // incorrecto
}
function accionD(): void {
    return 1; // incorrecto
}
*/