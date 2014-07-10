<?php
header("Content-type: image/png");

function nombre($n)
{
    return str_pad(mt_rand(0,pow(10,$n)-1),$n,'0',STR_PAD_LEFT);
}

function image($mot)
{
	
    $size = 32;
    $marge = 5;
    
    $matrix_blur = array(
        array(1,2,1),
        array(2,4,2),
        array(1,2,1));
            
    $box = imagettfbbox($size, 0, 'fonts/samplefont.ttf', $mot);
    $largeur = $box[2] - $box[0];
    $hauteur = $box[1] - $box[7];
    
    
    $img = imagecreate($largeur+$marge*2, $hauteur+$marge*2);
    $blanc = imagecolorallocate($img, 255, 255, 255); 
    $noir = imagecolorallocate($img, 0, 0, 0);
    
    imagettftext($img, $size, 0,$marge,$hauteur+$marge, $noir, 'fonts/samplefont.ttf', $mot);
    imageconvolution($img, $matrix_blur,16,0);
    
    imagepng($img);
    imagedestroy($img);
}


function captcha()
{
    $mot = nombre(5);
    $_SESSION['captcha'] = $mot;
    image($mot);
}

captcha();
?>