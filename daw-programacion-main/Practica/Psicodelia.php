<?php

class Psicodelia
{
    public int $longc,$ite;
    //pasar en hexadecimal
    public $color1;
    public $color2;

    function __construct($longc,$ite, $color1, $color2){
        $this->longc = $longc;
        $this->ite = $ite;
        $this->colory=explode(",", $color1);
        $this->colorx=explode(",", $color2);
    }


    function dibujar($ite,$imagen){
        $bg_color1 = ImageColorAllocate($imagen, $this->colorx(0), $this->colorx(1), $this->colorx(2));
        $bg_color2 = ImageColorAllocate($imagen, $this->colory(0), $this->colory(1), $this->colory(2));
        if($this->relleno){
            imagefilledrectangle($imagen,$this->x1,$this->y1,$this->x2,$this->y2,$bg_color1);
        }else {
            imagerectangle($imagen, $this->x1, $this->y1, $this->x2, $this->y2, $bg_color2);
        }
    }

}