<?php

// Iterable es un pseudotipo introducido en PHP 7.1,
// representa un objeto que se puede recorrer con una estructura de repetición foreach.
// Internamente un iterable será cualquier array, u un objeto que implemente la interfaz Traversable
// (se profundizará en secciones posteriores en la implementación de interfaces)
$dias = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
echo "¿Es el array \$dias un valor de tipo iterable? (sí 1 / no 0): " . is_iterable($dias) . " - usamos is_iterable()\n";

//Una variable 'iterable' se puede recorrer con un foreach:
foreach ( $dias as $indice => $valor) {
    echo "$indice: $valor\n";
}
