<?php
/*$fecha = "2019-11-17";
$fec=New DateTime($fecha);*/
/*
$num=5;
$flot=1.2;
$strin="Buenas tardes\t";
$time=new DateTime("now");
$ite=array("Adios");
$opc=true;
echo "Valores iniciales\n";
echo date_format($time, 'Y-m-d H:i:s'."\n");
echo "$num\n$flot\n$strin\n$ite[0]\n$opc\n";

function variables(int &$num, float &$flot, string &$strin, DateTime &$time, array &$ite, bool &$opc){
    $num=$num*2;
    $flot=$flot*3;
    $strin.=" añadido\n";
    $time=new DateTime("2022-11-02");
    $ite[0]="Hola que tal";
    if($opc){
        $opc=false;
    }else{
        $opc=true;
    }
}
echo "Valores finales\n";
variables($num,$flot,$strin,$time,$ite,$opc);
echo date_format($time, 'Y-m-d H:i:s'."\n");
echo "$num\n$flot\n$strin\n$ite[0]\n$opc";*/

function factorial($num){
    if($num>1){
        return $num*factorial($num-1);
    }else{
        return 1;
    }
}

function potencia($base,$expo){
    if($expo==1){
        return $base;
    }elseif($expo==0){
        return 1;
    }else{
        return $base*potencia($base,$expo-1);
    }
}

$nume=5;
//echo "El factorial de $nume es: ".factorial(12);
echo "La potencia de 5 a 2 es: ".potencia(5,3);