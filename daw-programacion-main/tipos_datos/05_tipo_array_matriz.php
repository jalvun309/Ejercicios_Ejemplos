<?php

//Un array es una variable que almacena una colección de valores con un único nombre.

echo "1) Creación de un array:\n";
$peliculas = array();   //crea un arreglo o matriz vacía
print_r($peliculas);    //muestra array vacío

echo "\n2) Inicialización de un array:\n";
$peliculas[] = "Pulp fiction";  //carga el valor en la siguiente posición del arreglo, en este caso, en la posición 0 (1er elemento)
$peliculas[] = "Casablanca";    //carga valor en la siguiente posición: posición 1, 2º elemento
$peliculas[2] = "Un tranvía llamado deseo";     //carga valor en la posición 2 (3er elemento)
$peliculas[9] = "Avatar";       //carga valor en la posición 9, dejando posiciones 3-8 sin inicializar
print_r($peliculas);

$dias = array("lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo");
    //crea un arreglo y al mismo tiempo lo inicializa con 6 cadenas de texto
    //no indicamos los índices, por tanto los valores se guardarán en posiciones secuenciales: 0, 1... 6
print_r($dias);

$peliculas2 = array(0 => "Pulp fiction", 1=> "Casablanca", 2=> "Un tranvía llamado deseo", 9=>"Avatar");
    //inicialización alternativa, indicando los índices en los que se guarda cada valor
print_r($peliculas2);

$cajon = array(2, 1.63, true, "luna", Null, array("rojo", "verde", "azul") );
    //en php un arreglo puede almacenar valores de distinto tipo, incluso otros arreglos.
print_r($cajon);

$matriz2x2 = array (
    array(1, 0, 0),
    array(0, 1, 0),
    array(0, 0, 1)
);
    //Un arreglo de dos dimensiones, o una matriz de dos dimensiones, es un arreglo que a su vez contiene
    //en cada elemento otro arreglo.
    //usamos la notación anterior, distribuyendo la inicialización en varias líneas para mejorar la legibilidad
print_r( $matriz2x2);


echo "\n3) Accediendo a los valores de un arreglo:\n";
//para leer un valor, utilizamos el identificador del arreglo y entre corchetes el índice del valor:
echo $peliculas[0] . PHP_EOL;
echo $dias[6] . PHP_EOL;
echo $cajon[3] . PHP_EOL;
echo $matriz2x2[0][2] . PHP_EOL;

//si usamos un índice inexistente, obtenemos un aviso:
//echo $dias[10] . PHP_EOL;   //PHP Warning:  Undefined array key 10

echo "\n4) Modificando los valores de un arreglo: \n";
// Empleamos el operador de asignación = y cargamos un nuevo valor en la posición que deseamos
$peliculas[0] = "PULP FICTION";
print_r($peliculas);

//Para eliminar un valor de arreglo:
unset( $peliculas[1] );     //eliminamos "Casablanca" en la posición 1
print_r($peliculas);

//Para eliminar el arreglo completo, y liberar la memoria que ocupa:
unset( $cajon );

echo "\n5) Funciones útiles para trabajar con arrays: \n";
//ver el tamaño de un arreglo
echo "\$peliculas tiene " . count($peliculas) . " elementos\n";
print_r($peliculas);

//crear un arreglo con un intervalo de números
$multiplos5 = range(5, 50, 5);
print_r($multiplos5);

$cuenta_atras = range (5, 0, -1);
print_r($cuenta_atras);

//convierte una cadena en un arreglo
$palabra = "aprendiendo";
$letras = str_split($palabra);
print_r($letras);

//convierte cadena en arreglo, teniendo presente caracteres internacionales
$nombre = "María";
$letras1 = str_split($nombre);      //genera array("M", "a", "r", "�", "�", "a");   INCORRECTO
$letras2 = mb_str_split($nombre);   //genera array("M", "a", "r", "í", "a");        OK
print_r($letras1);
print_r($letras2);


//construye un arreglo a partir de una cadena, utilizando un carácter como separador
$ruta="home/user/php";
$carpetas = explode("/", $ruta);
print_r( $carpetas);

$frase = "En otoño los árboles dejan caer sus hojas";
$palabras = explode(" ", $frase);
print_r( $palabras);


echo "\n6) Arreglos asociativos, hash maps o diccionarios:";
// Un arreglo de php, además de tener índices numéricos, $a[3], acepta cadenas de texto como índices $a["color"].
// Es decir, se pueden utilizar como arreglos o matrices asociativas:
$usuario['nombre'] = "Marta";
$usuario['clave'] = "12345";
$usuario['edad'] = 28;
print_r( $usuario );

//otra forma de inicializar el arreglo sería:
$usuario = array('nombre' => "Marta", 'clave' => "12345", 'edad' => 28);
print_r ($usuario);

//podemos tener arreglos que mezclen los dos tipos de índices:
$usuario[5] = 2054;

//para recorrer un arreglo asociativo con un bucle foreach:
foreach($usuario as $clave => $valor) {
    echo "$clave: $valor\n";
}