<?php

//El tipo float almacena un valor real, con decimales
echo "1) Asignación con literales float:\n";
$numero_float1 = 1234.123;
$numero_float2 = 1_234.123;  //Con separador de cifras para mejor legibilidad; a partir de PHP 7.4.0
$numero_float3 = 0.1213;
$numero_float4 = -1234.0;
$a = 1.2e3;     //equivale a 1200 = 1.2 · 10³ = 1.2 · 1000
$b = 1.2E3;     //igual al anterior
$c = 7E-2;      //equivale a 0.07 = 7 · 10⁻² = 7 · 1/100
$d = 1_234.567; //
echo "a: $a \tb: $b \tc: $c \td: $d \n";

echo "\n2) Valores máximos y mínimos:\n";
echo "El máximo float es: " . number_format(PHP_FLOAT_MAX) . PHP_EOL;
echo "\t en notación exponencial: " . PHP_FLOAT_MAX . PHP_EOL;
echo "El float positivo más pequeño es: " . PHP_FLOAT_MIN . PHP_EOL;

echo "\n3) Valores no númericos de float: NaN 'not a number': \n";
echo "\t Raíz cuadrada de -1: \n";
$a = sqrt(-1);  //NaN (la raíz cuadrada de un negativo es un número imaginario, no es un real
var_dump($a);

echo "\n4) Imprecisiones de cálculo con números float: \n";
$b = 0.1+0.2;
if($b == 0.3) {
    echo "0.1+0.2 da el resultado ESPERADO: " . number_format($b, 20) . PHP_EOL;
} else {
    echo "0.1+0.2 da un resultado ERRÓNEO: " . number_format($b, 20) . PHP_EOL;
}
//Esta impreción ocurre porque internamente los valores flotantes se representan:
// número = a · 2 ^ b

echo "\nLa solución es, en lugar de comparar, comprobar que la diferencia no supera un umbral 'epsilon': \n";
$epsilon = 0.0000001;
if($b -0.3 < $epsilon) {
    echo "0.1+0.2 da el resultado ESPERADO: " . number_format($b, 20) . PHP_EOL;
} else {
    echo "0.1+0.2 da un resultado ERRÓNEO: " . number_format($b, 20) . PHP_EOL;
}

echo "\nOtra opción es usar las funciones matemáticas de precisión arbitraria, como bccomp:\n ";
if( bccomp($b, 0.3, 5) == 0) { //Compara $b y 0.3 con 5 dígitos de precisión
    echo "0.1+0.2 da el resultado ESPERADO: " . number_format($b, 20) . PHP_EOL;
} else {
    echo "0.1+0.2 da un resultado ERRÓNEO: " . number_format($b, 20) . PHP_EOL;
}