<?php
//
echo "1) ¿Existe la clase DateTime? (Sí: 1 / No: 0): " . class_exists("DateTime") . " - usamos class_exists() \n";
$fecha = new DateTime("now");    //Crea (instancia) un objeto DateTime con el instante presente de hora y fecha.
$periodo = new DateInterval("P1Y2M");   //Crea un objeto DateInterval que representa un periode de 1 año y 2 meses.
echo "¿Es \$fecha un objeto? (Sí 1 / No 0) " . is_object($fecha) . " - usamos is_object()\n";

echo "\n2) Comprobar la clase de un objeto: \n";
echo "La clase de la variable \$fecha es: " . get_class($fecha) . " - hemos usado get_class() \n";
if( $fecha instanceof DateTime) {
    echo "Con *instanceof* comprobamos que la variable es del tipo DateTime\n";
}
echo "La clase de la variable \$periodo es: " . get_class($periodo) . " - hemos usado get_class()  \n";

//Ver los métodos del objeto
echo "\n3) Análisis de las funciones (*métodos*) y datos (*propiedades*) que ofrece una clase: \n";
echo "Métodos (funciones) disponibles para el objeto DateTime \$fecha:\n";
print_r( get_class_methods( $fecha));
echo "Propiedades (datos) disponibles para el objeto DateTime \$fecha:\n";
print_r( get_object_vars( $fecha));

echo "\nVemos que DateTime no tiene propiedades públicas; sin embargo sí tiene propiedades privadas:";
print_r($fecha);
/*echo "Clase padre o ancestro de la clase DateTime:\n";
print_r( get_parent_class( "DateTime"));
*/

echo "\nMétodos (funciones) disponibles para el objeto DateInterval \$periodo:\n";
print_r( get_class_methods( $periodo));
echo "Propiedades (datos) disponibles para el objeto DateInterval \$periodo:\n";
print_r( get_object_vars( $periodo));


echo "\n\n4) Accediendo a las propiedades y métodos de una clase con el operador -> \n";
echo "Accedemos a los métodos de DateTime para mostrar la fecha en un formato personalizado,\n";
echo "y el huso horario TimeZone actual:\n";
echo $fecha->format('Y-m-d H:i:s') . PHP_EOL;
$huso = $fecha->getTimeZone();  // guardamos el huso horario en $huso
echo $huso->getName() . PHP_EOL;
echo "Igual con llamadas encadenadas: {$fecha->getTimezone()->getName()} \n"; //Equivalente a las dos líneas anteriores
    //Vemos que las llamadas a métodos con el operador -> se pueden encadenar, y se evalúan de izquierda a derecha.

echo "\nModificamos TimeZone para ver la misma fecha y hora en otro huso horario:\n";
$timezone = new DateTimeZone("America/Los_Angeles");
$fecha->setTimezone( $timezone );
echo "Mismo instante en Los Angeles: {$fecha->format('Y-m-d H:i:s')} \n";

echo "\n5) Creando periodos de tiempo para añadirlos o restarlos a \$fecha:\n";
$one_year = new DateInterval( "P1Y");
$fecha->add( $one_year );
echo "Nueva fecha un año después: {$fecha->format('Y-m-d H:i:s')} \n";

$three_years = new DateInterval( "P3Y");
$three_years->invert = 1;     //"invertimos" el periodo para poder "restarlo" a nuestra fecha (restar: sumar periodo invertido)
$fecha->add( $three_years );
echo "Nueva fecha tres años antes: {$fecha->format('Y-m-d H:i:s')} \n";

$fecha_mensaje = new DateTime('09/28/2022');

//Como ejercicio: realiza una diferencia entre dos fechas DateTime,
// para ver cuanto faltas para el final de curso el próximo 21-junio
