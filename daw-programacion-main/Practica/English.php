<?php

echo "\nBienvenido al esquema de Ingles de Magda\n ";

echo "Choose one of the options (1-4)\n";
echo "1. Details of furnitures\n";
echo "2. Countables and Uncountables\n";
echo "3. Present simple\n";
echo "4. Present Continuous";
$opcion=trim(fgets(STDIN));

if($opcion==1){
    echo "Examples of furnitures\n";
    echo "Choose the room for examples\n";
    echo "1)Beedroom\t 2)Kitchen\t 3)Bath\t 4)Living room\n";
    $room=trim(fgets(STDIN));
    switch($room){
        case 1:
            echo "Ejemplos de habitacion";
            break;
        case 2:
            echo "Ejemplos de cocina";
            break;
        case 3:
            echo "Ejemplos del baño";
            break;
        case 4:
            echo "Ejemplos del salon";
            break;
        default:
            echo "You choose an option out of range, try again.\n";
    }
}else if($opcion==2){
    echo "\nExamples for countables and uncountables\n";
    $opc=trim(fgets(STDIN));
    //Añadir estructura condicional y su contenido
    if($opc=="countables"){
        //Hacer codigo de tabla para ejemplos
    }else if($opc=="uncountables"){
        //Same
    }else{
        echo "You choose an option out of range, try again.\n";
    }
}else if($opcion==3){
    echo "Estructura sobre el presente simple";
}else if($opcion==4) {
    //estructura sobre el presente continuo
}
