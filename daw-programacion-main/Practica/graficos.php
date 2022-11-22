<?php

if (!function_exists("ImageCreate")) {
    echo "La extensión GD no está correctamente configurada.\n";
    return;
}

header("Content-type: image/png");
$image_pointer = ImageCreate(500, 500) or die ("Cannot Create image");
$bg_color = ImageColorAllocate($image_pointer, 255, 0, 0);
$txt_color = ImageColorAllocate($image_pointer, 0, 0, 0);
$txt_colorw= ImageColorAllocate($image_pointer,255,255,255);
$txt_colorp= ImageColorAllocate($image_pointer,255,0,255);

$img_alto=500;
$img_ancho=500;

imagefilledrectangle($image_pointer,20,20,480,480,$txt_color);
imagefilledellipse($image_pointer,250,250,250,250,$txt_color);
ImageFilledEllipse($image_pointer,250,250,250,500,$txt_colorp);
imagefilledrectangle($image_pointer,0,200,500,300,$txt_colorw);
imageline($image_pointer,0,0,$img_alto,$img_alto,$txt_colorw);
imageline($image_pointer,0,$img_alto,$img_alto,0,$txt_colorw);


ImagePng($image_pointer);

