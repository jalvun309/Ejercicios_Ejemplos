<?php

// 1) una variable no inicializada, tiene un valor vacío o nulo (NULL), pero que no es cero.
echo "1) ¿Cuál es el valor de $nueva_var si no ha sido inicializada?\n";
if( $nueva_var == NULL) {
    echo 'La variable $nueva_var tiene un valor vacío o NULL: $nueva_var=' . $nueva_var . PHP_EOL;
}

// 2) Asignar NULL a una variable es similar a eliminarla de memoria (si no tuviera otras referencias o copias)
echo "\n2) ¿Qué ocurre si asigno NULL a una variable ya inicializada?\n";
$matriz = new SplFixedArray(10_000_000);
echo 'El script está usando: ' . number_format(memory_get_usage() / 1024) . 'KB de memoria.' . PHP_EOL;
$matriz = NULL;     //eliminamos de memoria la $matriz, similar a unset($matriz)
echo 'Tras eliminar la $matriz, se usan: ' . number_format(memory_get_usage() / 1024) . 'KB de memoria.' . PHP_EOL;

// 3) Una función que no devuelve nada, es como si devolviera NULL.
echo "\n3) ¿Qué valor equivale al de una función que no devuelve nada?\n";
$var = saludo();
if( $var == NULL) {
    echo "La variable $var tiene valor vacío o NULL" . PHP_EOL;
}

// 4) Una función también puede devolver NULL
echo "\n4) ¿Qué valor equivale al de una función que no devuelve nada?\n";
$var = despedida();
if( $var == NULL) {
    echo "La variable $var tiene valor vacío o NULL" . PHP_EOL;
}


function saludo () {
    echo "Saludando\n";
    return NULL;
    return;
}

