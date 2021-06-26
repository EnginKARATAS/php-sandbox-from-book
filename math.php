<?php
$metin =trim("MERHABA benim adım engin");

$aranacak = "engin";
$index = strpos($metin,$aranacak);
echo $aranacak. "aranacak kelimedir ve indexte uzaklığı <br> ". $index ." dir";
echo "<br>indexe olan uzaklığının ikilik sayıda karşılığı : ";//42 = 001010101010
echo  decbin($index);
echo "<br><br><br><br>";
echo "başkaa bir yöntemle aynı sonuç (daha güzel):" .
    base_convert($index,10,2)."<br>";

echo $yeniSayi = 222.5."<br>";
echo ceil($yeniSayi)." :yukarı yuvarlama<br>";
echo floor($yeniSayi)." :aşağı yuvarlama<br> ";
echo round($yeniSayi)." :5ten büyükse yukarı else aşşağı<br>";

echo "rand fonk ile elde edeilebilecek max sayı: <b>".mt_getrandmax()."<b> dir";
echo "<br> sayı üret ".rand(1,10);
