<?php
$chaine='23456789ABCDEFGHJKLMNPQRSTUVWXYZ';

$image=imagecreatefrompng("images/images.png");

$color=imagecolorallocate($image,140,0,140);

$font='fonts/froufrou.ttf';

function getCode($length,$chars)
{
$code=null;

for($i=0; $i<$length; $i++)
	
{
	$code .=$chars{mt_rand(0,strlen($chars)-1)};
}
return $code;
};
$code= getCode(5,$chaine);

$char1=substr($code,0,1);
$char2=substr($code,1,1);
$char3=substr($code,2,1);
$char4=substr($code,3,1);
$char5=substr($code,4,1);

imagettftext($image,28,-10,0,100,$color,$font,$char1);
imagettftext($image,28,20,37,100,$color,$font,$char2);
imagettftext($image,28,-35,55,100,$color,$font,$char3);
imagettftext($image,28,25,120,100,$color,$font,$char4);
imagettftext($image,28,-15,140,100,$color,$font,$char5);

header('Content-Type: image/png');

imagepng($image);

imagedestroy($image);

?>
