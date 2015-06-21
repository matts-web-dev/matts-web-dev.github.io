 <?php
img();
exit();

function img()
{
    ini_set("user_agent", "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)");
    $data = file_get_contents('http://stats.grats.pw/misc/sig.php?s=32');

    $font = 'http://matts-web-dev.github.io/fonts/achv2i.ttf';
    $image = @imagecreatefrompng('http://lorempixel.com/400/200/');


    $data = explode("_._",$data);
    $scriptname = $data[0];
    
    



    $pink = imagecolorallocate($image, 250, 0, 251);
    imagefilledrectangle($im, 0, 0, 0, 29, $pink);

    imagettftext($image, 14, 0, 6, 18, $pink, $font, $scriptname);

    header("Content-Type: image/png");
    Imagepng($image);
    ImageDestroy($image);
}
?> 