<?php
    /*
        Crear una funcion que se llame resaltador() que dada una "palbra"
        busca las ocurrencias dentro de un texto y las va reemplazando por su versión resaltada
        (<bold></bold). Usará la función creada anteriormente (integrarlo con el ejercicio 2)
    */

function resaltador($palabra="", $texto=""){
    $cambio=str_replace($texto,$palabra,"<bold>$palabra</bold>");
    return $cambio;
}

/*  Crea funcion que recibe un listado de palabras en un arrgelo y un texto.
    La funcion devuelve el texto pero con las palabras resaltadas. El tipo de resalte se dará
    por un tercer parametro de entrada que permitira elegir entre (como minimo)
    negrilla, cursiva (y como opcional los demás que hemos usado en ejercicios anteriores.
*/
$lista = array(2);
function listado($lista,$texto,$opcion){

    for($contador=0;$contador<count($lista);$contador++){

    $resultado= str_replace($texto,$lista[$contador],"<bold>$lista($contador)</bold>\n");

}
    echo "Se han aplicado los cambios en la palabra seleccionada : $palabra\n";

return $resultado;
}

//*********************************************************************************
$lista = array(4);

function listado2 ($lista,$texto,$opcion){
    for ($i = 0; $i < count($lista); $i++ ){
        switch ($opcion){
            case 0 :
                $cursiva= str_replace($texto,$lista[$i],"<i>$lista[$i]</i>\n");
                echo "\n".$cursiva;
                break;
            case 1 :
                $negrita= str_replace($texto,$lista[$i],"<b>$lista[$i]</b>");
                echo "\n".$negrita;
                break;
            case 2 :
                $tachado = str_replace($texto,$lista[$i],"<strike>$lista[$i]</strike>";
                echo "\n".$tachado;
                break;
            case 3 :
                $subrayado = str_replace($texto,$lista[$i],"<u>$lista[$i]</u>");
                echo "\n".$subrayado;
                break;
            default:
                echo "Wiskili";
                break;

        }








    }

}