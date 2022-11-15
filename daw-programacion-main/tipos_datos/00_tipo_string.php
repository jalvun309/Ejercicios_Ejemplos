<?php

echo "1) Definición de variables de tipo string\n";
$cadena1 = "Esto es una cadena de caracteres definida con comillas dobles";
$cadena2 = 'Esto es una cadena entre comillas simples';
$cadena3 = ""; // Cadena vacía con 0 caracteres.
// 2) Concatenando cadenas con el operador . de concatenación
echo $cadena1 . PHP_EOL;
echo $cadena2 . PHP_EOL;
echo $cadena3 . PHP_EOL;
    //PHP_EOL = constante que recoge el carácter de nueva línea, con independencia del sistema operativo

echo "\n3) Incluyendo variables en cadenas de texto:\n";
$dato = "IMPRIMIBLE";
$texto_simple = 'No se imprime la variable $dato';      //Muestra: No se imprime la variable $dato
$texto_doble = "Sí se imprime el valor de dato: $dato"; //Muestra: Sí se imprime el valor de dato: IMPRIMIBLE
echo $texto_simple . PHP_EOL;
echo $texto_doble . PHP_EOL;

echo "\n4) Utilizando caracteres especiales en cadenas con comillas dobles:\n";
//Las cadenas de comillas dobles pueden utilizar el carácter de escape '\':
//- para introducir caracteres especiales como nueva línea \n o tabulador \t.
//- para 'escapar caracteres especiales: \" \$ o la propia contra-barra entre otros.
echo 'Las cadenas entre comillas simples pueden contener "comillas dobles" sin más, pero no comillas simples' . PHP_EOL;
echo "Las cadenas dobles pueden contener 'comillas simples' , y también \"comillas dobles\" utilizando carácter de escape.\n";
echo "La variable \$dato está definida; escapamos el caracter dolar con la contra-barra.\n";
    //no reemplazará $dato por su valor, porque estamos 'escapando' el $

echo "\nPodemos escapar la propia contra-barra \\ con el carácter de escape\n";
echo "Con \\t podemos formatear la salida de texto en pantalla con tabuladores: \tdato1 \tdato2 \n";    //c
echo 'Las cadenas simples no interpretan los tabuladores \t ni las nuevas líneas \n' . PHP_EOL;

echo "\n5) Sintaxis heredoc para cadenas multilínea con reemplazo de variables y caracteres especiales:\n";
$parrafo1 = <<<TEXTO
Todo este texto
formará parte de la cadena
incluyendo los saltos de línea.
Se pueden introducir variables:
\$dato = $dato 
y caracteres especiales como 
tabuladores: \tdato1 \tdato2\n
TEXTO;
//podemos elegir cualquier etiqueta para marcar el inicio y final del texto,
//siguiendo las mismas reglas de nomenclatura de variables: alfanuméricos y guiones bajos, no comenzando por un número.
$parrafo2 = <<<OTRA_ETIQUETA
\nEste tipo de literales de texto
es muy útil para bloques grandes 
de <bold>código HTML</bold> 
que incluiremos tal cual en páginas web dinámicas:
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
</head>
OTRA_ETIQUETA;
echo $parrafo1;
echo $parrafo2;

//IMPORTANTE: si existe **algún carácter tras la etiqueta**, como un espacio o un comentario, el intérprete lanzará un error
/*
$parrafo1 = <<<TEXTO [este texto generaría error]
Asignación errónea
por el texto entre corchetes
TEXTO;
 */

echo "\n6) Sintaxis nowdoc para cadenas multilínea con reemplazo de variables:\n";
$parrafo3 = <<<'TEXTO'
Estas cadenas son idénticas a las heredoc
pero sin reemplazo de variables ($dato)
ni uso de caracteres especiales \t \n \$ \\.
La ventaja es que el intérprete no se para 
a analizarlas y mejoran ligeramente el rendimiento.

TEXTO;
echo $parrafo3;

echo "\n\n8) Longitud de una cadena strlen() y mb_strlen(): \n";
$palabra = "universo";
echo "La logintud de la cadena <$palabra> es " . strlen($palabra) . PHP_EOL;
echo "- strlen() no funciona con caracteres internacionales: longitud de 'José' es: " . strlen("José") . " - INCORRECTO!!\n";
echo "- usamos mb_strlen() con caracteres internacionales: longitud de 'José' es: " . mb_strlen("José") . " - OK!!\n";

//mb_strlen() está en el paquete mbstring, que requiere instalación / configuración.
//En ubuntu: sudo apt install php8.1-mbstring
//En windows: abre C:/PHP8.1/php.ini,y descomenta la línea: ;extension=mbstring (borrando el punto y coma ‘;’ inicial)

echo "\n\n8) Uso de notación de arreglos para acceder a las letras de una cadena: \n";
$palabra = "comenzó";
$letra0 = substr($palabra, 0, 1);
echo "Sea la palabra <$palabra>, la primera letra es $letra0 - empleando substr()\n";
echo "Alternativamente podemos usar \$palabra[0]: " . $palabra[0] . PHP_EOL;

echo "\nIMPORTANTE: ninguno de los dos métodos anteriores funciona con caracteres internacionales: \n";
echo "Última letra de <$palabra> : substr() -> " . substr($palabra, 6, 1) . " - y \$palabra[6] = $palabra[6]\n";

echo "\nEl acceso a una letra se hará con mb_substr() -> " . mb_substr($palabra, 6, 1) . PHP_EOL;
echo "O convirtiendo la cadena a un arreglo con mb_str_split(): \n";
$letras = mb_str_split($palabra);
echo "Última letra de <$palabra> \$letras[6] = $letras[6]\n";
print_r($letras);

