<?php
function es_primo($n) {
    for($i=2; $i < $n/2; $i++) {
        if( $n % $i == 0) {
            return false;
        }
    }
    return true;
}

//Este programa
echo "Introduce un número: \n";
$num = (int) fgets(STDIN);

//Muestra números primos entre 1 y $num
for ($i = 2; $i <= $num; $i++) {
    if (es_primo($i)) {
        echo "$i es un número primo. \n";
    }
}

