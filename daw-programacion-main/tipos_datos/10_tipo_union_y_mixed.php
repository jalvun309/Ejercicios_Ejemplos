<?php

//En PHP podemos indicar el tipo de datos que recibirá la función
//El intérprete tratará de convertir implícitamente los datos al tipo indicado

//Si activamos la directiva strict, el intérprete lanzará error fatal
//si los tipos de los argumentos no coinciden con los esperados
//declare( strict_types=1);


echo suma(1, 2) . PHP_EOL;      //invocamos la función con dos enteros
echo suma(10, 20.5) . PHP_EOL;  //invocamos la función con un entero y un flotante
echo suma((int) "100", 20.5) . PHP_EOL; //invocamos con una cadena convertida a entero y un flotante
echo suma(1002, "20.5") . PHP_EOL;  //invocamos con un entero y una cadena que el intérprete convertirá a flotante


function suma(int|float $num1, int|float $num2) {
    //el tipo de los argumentos de la función puede ser o bien int o bien float
    //decimos que son por tanto de tipo "unión" de int y float
    echo "\tsuma(): tipo num1: " . gettype($num1) . PHP_EOL;
    echo "\tsuma(): tipo num2: " . gettype($num2) . PHP_EOL;
    return $num1 + $num2;
}


//La función mostrar() acepta un parámetro de cualquier tipo,
//por tanto ninguna de las siguientes llamadas dará error aún con la directiva strict activada
echo mostrar("palabra") . PHP_EOL;
echo mostrar(55) . PHP_EOL;
echo mostrar(1.63) . PHP_EOL;
echo mostrar(true) . PHP_EOL;

function mostrar(mixed $valor) {
    //Indicamos que aceptamos cualquier tipo para el argumento $valor
    echo "\tmostrar(): tipo valor: " . gettype($valor) . PHP_EOL;
    echo "El valor es: " . $valor . PHP_EOL;
}





