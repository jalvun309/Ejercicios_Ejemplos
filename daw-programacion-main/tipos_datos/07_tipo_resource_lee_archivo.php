<?php
$filename = './datos/provincias.txt';
$archivo = fopen($filename, 'r');   //'r' indica abrir el archivo en modo lectura

var_dump ($archivo); //mostramos el tipo de datos de $archivo

if (!$archivo) {
    return; //Si $archivo es null, concluimos: el archivo no ha podido abrirse
}

//Leemos el archivo línea a línea hasta que el final del archivo EOF (end-of-file)
while (!feof($archivo)) {                // feof() devuelve true si se ha alcanzado el final del archivo (end-of-file)
    $contents[] = trim(fgets($archivo)); //lee datos del archivo hasta encontrar "\n"
}
fclose($archivo);      //cerramos el archivo para liberar recursos
print_r($contents);    //mostramos el contenido leído del archivo


