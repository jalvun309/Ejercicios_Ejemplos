<?php

class Rectangulo{

    public int $x1,$x2;
    public int $y1,$y2;

    public int $ancho,$alto;
    public bool $relleno;

    function __construct(int $x1,int $y1,int $x2,int $y2,int $ancho,int $alto,bool $relleno){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->relleno = $relleno;
    }

    function __destruct(){}

    function dibujar($color,$imagen){
        if($this->relleno){
            imagefilledrectangle($imagen,$this->x1,$this->y1,$this->x2,$this->y2,$color);
        }else {
            imagerectangle($imagen, $this->x1, $this->y1, $this->x2, $this->y2, $color);
        }
    }

    function __toString(){
        $mensaje = "\nAlto del rectangulo: {$this->alto}\n";
        $mensaje .= "\nAncho del rectangulo: {$this->ancho}\n";
        $mensaje .= "\nRelleno: {$this->relleno}\n";
        return $mensaje;
    }

    function Convertir_cuadrado(&$ancho,&$alto):void{
        if($ancho>$alto){
            $alto=1.62*$ancho;
        }else{
            $ancho=1.62*$alto;
        }
    }

    function Convertir_aureo(&$ancho,&$alto):void{
        if($ancho>$alto){
            $alto=$ancho;
        }else{
            $ancho=$alto;
        }
    }
}

header("Content-type: image/png");


$image_pointer = ImageCreate(500, 500) or die ("Cannot Create image");
$txt_colorp= ImageColorAllocate($image_pointer,255,50,255);
$bg_color = ImageColorAllocate($image_pointer, 255, 0, 0);
$y1=200;
$y2=300;
$x1=0;
$x2=500;
$alto=$y2-$y1;
$ancho=$x2-$x1;
$aux=new Rectangulo($x1,$y1,$x2,$y2,$ancho,$alto,true);

$aux->Convertir_cuadrado($ancho,$alto);
$aux->dibujar($txt_colorp,$image_pointer);
imagepng($image_pointer);