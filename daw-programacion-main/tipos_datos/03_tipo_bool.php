<?php
//El tipo bool o booleano es el más simple:
// expresa un valor que puede ser true (verdadero) o false (falso).

$usuario_logado = True;
$pago_aceptado = false;
$saldo_insuficiente = False;
$continuar_calculo = TRUE;
$es_float = FALSE;
$esta_aprobado = true;

//pueden utilizarse en lugar de cualquier expresión lógica
if($usuario_logado) {
    echo "Mostrar saldo: 1.000€\n";
}

if($pago_aceptado) {
    echo "Gracias por su compra. Recibirá el producto en el plazo indicado.\n";
} else {
    echo "Error en el pago. Por favor ingrese de nuevo su tarjeta.\n";
}
