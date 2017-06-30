<?php
session_start();
$image = imagecreatetruecolor(100,30);//设置画布的宽高
imagesx($image);//获取画布宽
imagesy($image);//获取画布高
$bgcolor=imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$bgcolor);
//随机点
for($i=0;$i<200;$i++){
    for($j=0;$j<1;$j++){
        $x=rand(1,imagesx($image));
        $y=rand(1,imagesy($image));
        $dianc = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
        imagesetpixel($image, $x, $y, $dianc);

    }
}
//绘制线条
 for ($i=0;$i<5;$i++){
    $xianc = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
    //起点
    $x=rand(1,imagesx($image)/2);
    $y=rand(1,imagesy($image));
    //终点
    $x1=rand(($image)/2,imagesx($image));
    $y1=rand(1,imagesy($image));
    imageline($image, $x, $y, $x1, $y1, $xianc);
}

$color = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
imagestring($image, 10, 500, 150, "rand(0-9)", $color);
$arr=range("a", "z");
for($i=0;$i<10;$i++){
    array_push($arr, $i);
}
$fontsize=20;
$count=4;
$codes="";
for ($i = 0;$i < $count;$i++){
    $width = imagesx($image)/$count;
    $code = $arr[array_rand($arr)];
    $color = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
    imagettftext($image,$fontsize, rand(-30,30), $i*($width)+($width-$fontsize)/2,
        (imagesy($image)-$fontsize)/2+($fontsize), $color, "../YGYXSZITI2.0.TTF", $code);
    $codes.=$code;
}
$_SESSION["code"] = $codes;

header('Content-Type:image/png');
imagepng($image);