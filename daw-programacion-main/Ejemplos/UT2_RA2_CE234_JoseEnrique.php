<?php

function periodo_intuitivo($horas){

    if($horas>=0 and $horas<=3){
        echo "Se publicó esta mañana\n";
    }else if($horas>=4 and $horas<=24){
        echo "Se publico ayer\n";
    }else if($horas>=25 and $horas<=72){
        echo "Se publico la semana pasada\n";
    }else if($horas>=73 and $horas<=503){
        echo "Se publico el mes pasado\n";
    }else if($horas>=504 and $horas<=2180){
        echo "Se publico el año pasado\n";
    }else if($horas>=2180) {
        echo "Se publico hace mas de un año";
    }else{
        echo "Mal formato";
    }
}


function hoursInInterval($datetime1, $datetime2, $interval)
{
    $daysDiff = $interval->format('%d');
    $initialHour = $datetime1->format('G');
    $initialMinute = $datetime1->format('i');
    $finalHour = $datetime2->format('G');
    $finalMinute = $datetime2->format('i');
    $sumaHoras = 0;

    if ($daysDiff == 0) {
        if (($initialHour < 6 && $finalHour < 6) || ($initialHour > 21 && $finalHour > 21) || ($initialHour > 21 && $finalHour < 6)) {
            $sumaHoras += $interval->format('%H') + ($interval->format('%i') / 60);
        } else {
            if ($initialHour < 6) {
                $sumaHoras += 5 - $initialHour + ((60 - $initialMinute) / 60);
            } elseif ($initialHour > 21) {
                $sumaHoras += ($initialHour - 22) + ($initialHour / 60);
            }

            if ($finalHour > 21) {
                $sumaHoras += ($finalHour - 22) + ($finalMinute / 60);
            } elseif ($finalHour < 6) {
                $sumaHoras += 6 - (5 - $finalHour) + ((60 - $finalMinute) / 60);
            }
        }

    } else {
        $sumaHoras = 8 * $daysDiff;
        if ($initialHour != $finalHour) {
            if ($initialHour < 6) {
                $sumaHoras += 5 - $initialHour + ((60 - $initialMinute) / 60);
            } else {
                if ($initialHour > 21) {
                    $sumaHoras += ($initialHour - 22) + ($initialHour / 60);
                }
            }

            if ($finalHour < 6) {
                if ($finalHour < $initialHour)
                    $sumaHoras += 1 + (6 - (5 - $finalHour)) + ((60 - (60 - $finalMinute)) / 60);
                else
                    $sumaHoras += 6 - $finalHour + ((60 - $finalMinute) / 60);
            } else {
                if ($finalHour > 21) {
                    $sumaHoras += ($finalHour - 22) + ($finalMinute / 60);
                }
            }
        }
    }
    return $sumaHoras;
}


$date1 = new DateTime("now");

echo "Dime el año (0000)\n";
$Y=(int)trim(fgets(STDIN));
echo "Dime el mes (00)\n";
$M=(int)trim(fgets(STDIN));
echo "Dime el dia (00)\n";
$D=(int)trim(fgets(STDIN));

$date2 = new DateTime("$Y-$M-$D");

$interval = $date1->diff($date2);

$horas=hoursInInterval($date1,$date2,$interval);
echo "\n$horas\n";
periodo_intuitivo($horas);




