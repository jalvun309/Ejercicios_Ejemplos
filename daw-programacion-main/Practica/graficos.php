<?php

if (!function_exists("ImageCreate")) {
    echo "La extensión GD no está correctamente configurada.\n";
    return;
}

header("Content-type: image/png");
$image_pointer = ImageCreate(130, 50) or die ("Cannot Create image");
$bg_color = ImageColorAllocate($image_pointer, 255, 0, 0);
$txt_color = ImageColorAllocate($image_pointer, 0, 0, 0);


ImageString($image_pointer, 10, 15, 28, "Good Morning", $txt_color);
ImagePng($image_pointer);

