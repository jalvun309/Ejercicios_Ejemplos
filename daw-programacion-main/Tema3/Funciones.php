<?php
//Ejercicio 1 - 3 Dificultad (media)
function apertura($titulo="Por si aca"){
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "<title>$titulo</title>\n";
    echo "</head>\n";
    echo "<body>\n";
}
//Ejercicio 3 - Dificultad 4.5
function titulo($cadena){
    echo "<title>$cadena</title>\n";
}
//Ejercicio 1.
function cierre(){
    echo "</body>";
    echo "</html>";
}

//Ejercicio 4 - Dificultad 12.75
function enlace($cadena,$enlace,$direccion="_blank"){
    echo "<a href=".'"'."$enlace".'"'."target=".'"'."$direccion".'"'.">";
    echo "$cadena";
    echo "<a/>";

}
//Ejercicio 5 Dificultad 7 (porque es grasioso)
function RAE($palabra){
    echo "<a href=".'"'."https://dle.rae.es/$palabra".'"'.">Ver la definicion de $palabra en la RAE</a>";
}
//Ejercicio 2 Dificultad 14.5 (media exacta.)
function palabra($cadena){

        echo "\n<bold>$cadena</bold>";


        echo "\n<i>$cadena</i>";

        echo "\n<u>$cadena </u>";

        echo "\n<strike>$cadena</strike>";


}
//Ejercicio 6 Dificultad 7 (porque es grasioso x2)

function Wiki($palabra){
    echo "<a href=" . '"' . "https://es.wikipedia.org/wiki/$palabra" . '"' . ">$palabra</a>";
}

//Ejercicio 8.1

function crealistas($lista,$opcion){
    $repeticiones=count($lista);
    if($opcion==true){
        echo "<ol>";
        for($i=0;$i<$repeticiones;$i++){
            echo "<li>$lista[$i]</li>li>";
        }
        echo "</ol>";
    }else if($opcion==false){
        echo "<ul>";
        for($i=0;$i<$repeticiones;$i++){
            echo "<li>$lista[$i]</li>li>";
        }
        echo "</ul>";
    }else{
        echo "El segundo parametro no ha sido especificado de manera correcta";
    }

}

//Ejercicio 8.2

function crealistaMejor($lista,$opcion,$eleccion){
    $repeticiones=count($lista);
    if($opcion==true){
        if($eleccion=="RAE"){
            echo "<ol>";
            for($i=0;$i<$repeticiones;$i++){
                echo "<li>RAE($lista[$i])</li>";
            }
            echo "</ol>";
        }else if($eleccion=="Wiki"){
            echo "<ol>";
            for($i=0;$i<$repeticiones;$i++){
                echo "<li>Wiki($lista[$i])</li>";
            }
            echo "</ol>";
        }else{
            echo "Tercer parametro mal espeficicado";
        }
    }else if($opcion==false){
        if($eleccion=="RAE"){
            echo "<ul>";
            for($i=0;$i<$repeticiones;$i++){
                echo "<li>RAE($lista[$i])</li>";
            }
            echo "</ul>";
        }else if($eleccion=="Wiki"){
            echo "<ul>";
            for($i=0;$i<$repeticiones;$i++){
                echo "<li>Wiki($lista[$i])</li>";
            }
            echo "</ul>";
        }else{
            echo "Tercer parametro mal espeficicado";
        }
    }else{
        echo "El segundo parametro no ha sido especificado de manera correcta";
    }
}

//Ejercicio 7
function resaltador($palabra="", $texto=""){
    echo "Primero vamos a cambiar la palabra a negrita\n";
    $cambio=str_replace($texto,$palabra,"<bold>$palabra</bold>\n");
    echo $cambio;
    echo "";
    echo "Ahora lo vamos a probar en cursiva\n";
    $cambio = str_replace($texto,$palabra,"<i>$palabra</i>\n");
    echo "";
    echo "Ahora lo vamos a probar en tachado\n";
    $cambio = str_replace($texto,$palabra,"<strike>$palabra</strike>\n");
    echo "";
    echo "Ahora lo vamos a probar en subrayado\n";
    $cambio = str_replace($texto,$palabra,"<u>$palabra</u>\n");
}
//ejercicio 9
function listado ($lista,$texto,$opcion){
    for ($i = 0; $i < count($lista); $i++ ){
        switch ($opcion) {
            case 0 :
                $cursiva = str_replace($texto, $lista[$i], "<i>$lista[$i]</i>\n");
                echo "\n" . $cursiva;
                break;
            case 1 :
                $negrita = str_replace($texto, $lista[$i], "<b>$lista[$i]</b>");
                echo "\n" . $negrita;
                break;
            case 2 :
                $tachado = str_replace($texto, $lista[$i], "<strike>$lista[$i]</strike>");
                echo "\n" . $tachado;
                break;
            case 3 :
                $subrayado = str_replace($texto, $lista[$i], "<u>$lista[$i]</u>");
                echo "\n" . $subrayado;
                break;
            default:
                echo "Wiskili";
                break;

        }
    }
}

//Ejercicio 10


function DefinicionesArray($dic,$tipo){
    foreach ($dic as &$valor) {
        echo "<h$tipo>$valor</h$tipo>";
        echo "<p>$dic[$valor]</p>";
        echo RAE($valor);
    }
}