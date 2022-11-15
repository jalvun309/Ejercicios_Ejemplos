<?php

define('Elementos',1000);

$array1= array();
$array2= array();

for($i=0;$i<Elementos;$i++){
    $array1[$i]=random_int(-1000,1000);
}

for($i=0;$i<Elementos;$i++){
    $array2[$i]=$array1[$i]^2;
}
print_r(hrtime(true));




