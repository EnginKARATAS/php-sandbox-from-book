<?php
$dizi = array("adem","havva","isa","davut","muhammed","yusuf","isa");
$yaz = current($dizi);
echo $yaz."<br>";
$yaz = next($dizi);
echo $yaz."<br>";
$yaz = next($dizi);
$yaz = next($dizi);
echo $yaz."<br>";
$yaz = reset($dizi);
echo $yaz."<br>";
while ( list($anahtar,$deger)=each($dizi)){
    echo $anahtar." - ".$deger."<br>";
}
$anakart = list($ram,$cpu,$a2)=array("2123","sadas",333);
echo $ram.$cpu.$a2;
echo "<br><br>";

$birdizi = array(
    "a" => "adana",
    "b" => "bursa",
    "c" => "çanakkale",
    "d" => "danizli"

);
$keys = array_keys($birdizi);//keyler yani abcd yi diziye alır.
echo $keys[3];//d

for ($i=0;$i<count($birdizi);$i++){
    echo $birdizi[$keys[$i]] ;
}

echo "<br><br>";
$say=range(0,5);
print_r($say);
foreach ($say as $item){
    echo $item;
}






