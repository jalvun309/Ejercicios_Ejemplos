<?php

echo suma(3,4);

function suma(int|float $num1=50,int|float $num2):int|float
{
    return $num1+$num2;
}


function inverso($x)
{
    if (!$x) {
        throw new Exception('División por cero.');
    }
    return 1 / $x;
}

try {
    echo inverso(5) . "\n";
    echo inverso(0) . "\n";
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

// Continuar la ejecución
echo 'Hola Mundo\n';