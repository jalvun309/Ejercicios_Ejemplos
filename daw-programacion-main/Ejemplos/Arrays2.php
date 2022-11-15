<?php

define('Elementos',1000);
/*
public __construct(int $size = 0)
public count(): int
public current(): mixed
public static fromArray(array $array, bool $save_indexes = true): SplFixedArray
public getSize(): int
public key(): int
public next(): void
public offsetExists(int $index): bool
public offsetGet(int $index): mixed
public offsetSet(int $index, mixed $newval): void
public offsetUnset(int $index): void
public rewind(): void
public setSize(int $size): bool
public toArray(): array
public valid(): bool
public __wakeup(): void
}
*/
$array3 = new SplFixedArray(Elementos);
$array4 = new SplFixedArray(Elementos);


for($i=0;$i<Elementos;$i++){
    $array3[$i]=random_int(-1000,1000);
}

for($i=0;$i<Elementos;$i++){
    $array4[$i]=$array3[$i]^2;
}

//Se puede ver que hay una diferencia minima, con un mayor volumen de datos podría ampliarse
print_r(hrtime(true));
//memory_get_usage(bool $real_usage = false): int
echo "Memoria usada para php con este uso: ".memory_get_usage()."\n";

//Este devuelve el pico de memoria asignada por PHP
//Puede venir bien para ver la carga maxima sobre el servidor cuando a tu algoritmo necesita mas recursos, y ver como optimizarlo.
echo "Pico de memoria asignada: ".memory_get_peak_usage()."\n";