<?php
$a = 5 ;

if(++$a <> 7){//eşit değişse
    echo ++$a."</br>";
}

$isim = "3engin";
$sayi = 3;
if ($sayi == $isim){
    echo $sayi." v e ".$isim." a y n ı d ı r ";
}

$elma = "elma";
$armut = "armut";
echo ($elma==$armut) ? ("elma armuttur"):("elma armut değildir"); //tek satır if

if ($elma == $armut):
    echo "sa";
else:
    echo "no sa";
endif;

$alfa = 33;
$beta = 142;
$teta = 8/3;
if ($alfa == $beta and $alfa == $teta):
    echo  "cyayr";
elseif($alfa == $beta || $alfa != $teta):
    echo "echo";
else:
    echo "hiçbiri";
endif;