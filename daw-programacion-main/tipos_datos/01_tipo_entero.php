<?php

//Representan un valor entero
$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number con guiones bajos para separar cifras

echo "1) Un valor int ocupa " . PHP_INT_SIZE . " bytes en memoria\n";
echo "y va desde " . number_format(PHP_INT_MIN) . PHP_EOL;
echo "hasta  " . number_format(PHP_INT_MAX) . PHP_EOL;

echo "\n2) ¿Cuál es el máximo entero binario que podemos representar con 64 bits?";
$a= 0b01111111_11111111_11111111_11111111_11111111_11111111_11111111_11111111;
//El primer bit se deja a cero para el signo.
echo number_format($a) . PHP_EOL;

echo "\n¿Qué ocurre cuando se supera el máximo valor de un entero?\n";
$a = PHP_INT_MAX;
var_dump($a);
$a++;
echo number_format($a);
var_dump($a);
