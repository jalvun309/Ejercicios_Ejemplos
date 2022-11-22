<?php
/*$fecha = "2019-11-17";
$fec=New DateTime($fecha);*/

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
echo "$num\n$flot\n$strin\n$ite[0]\n$opc";