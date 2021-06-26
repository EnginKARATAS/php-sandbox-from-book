<?php
#bu kodla...
$uyeBilgileri = array(
    "adSoyad" => "engin karataş",
    "ogrNo" => "65030293912",
    "anaokulAdi" => "ejderha eğitmim kampı",
    "puani" => "454 puan"
);

#bu kod aynı..
$user = array();
$user["adSoyad"]="engin karataş";
$user["parola"]="aydas$32_";
$user["sayilar"]=array("1",2,4,4,5);
$user["asLike"]="Akamikaze";
$user[7] = array(22,44,66,77);

#çok boyutlu dizi tanımlama : ogrenci[3]
$ogrenci = array();
$ogrenci[0] = "e ";
$ogrenci[1] = "a ";
$ogrenci[2] = array("b");
$ogrenci[3] = array(
    "prop" => "r",
    "cevap" => "ee"
);

#dizi indis değerleri ve değerlerini almak
#Ornek :$uyeBilgileri["ogrNo"]; indis değeri ogrNo, indisin değeri = in karşusauunda ne varsa

$nelerNeler = array(
  "siper" => "y",
  "bayrak" => "f",
  "j" => "z"
);

#dizinin elemanlarını ekleyip çıkaralım önden arkadan
$diziVeriEkle = Array(
    "elma",
    "armut",
    "patates",
    "Havuç"
);

echo $uyeBilgileri["ogrNo"];
echo "<br>";
echo $user["adSoyad"];

foreach ($user["sayilar"] as $item) {
    echo $item;
}

echo "<br><br><br>";
echo $ogrenci["2"]["1"];#tam tahmin ettiğin gibi... anladın sen ekstra bir şey yok
echo $ogrenci["3"]["prop"];#tam tahmin ettiğin gibi... anladın sen ekstra bir şey yok

echo "<br><br>";
foreach ($nelerNeler as $indis => $deger){
    echo "<b>".$indis."<b> : ". $deger;
    echo "<br>";
}

echo "<br><br>";
array_unshift($diziVeriEkle,"sustain","celebrate");
print_r($diziVeriEkle);

echo "<br><br>";
echo "dizinin indis numaralarına dikkat et. bu numaralar dizinin elemanları silindiğinde resetlenmez bu unset fonku sayesinde oldu.";
echo "<br><br>";
unset($diziVeriEkle["1"],$diziVeriEkle["2"]);
print_r($diziVeriEkle);

#****************************istediğimiz bir diziyi clear edelim:
echo "<br><br>";
$diziVeriEkle = array();
print_r($diziVeriEkle);

#dizi birleştirme
echo "<br><br>";
$akdeniz_bolgesi = array("antalya","muğla","burdur","mersin");
$ege_bolgesi = array("izmir","aydın","çanakkale","mersin");
$tumiller =array_merge($akdeniz_bolgesi,$ege_bolgesi); #baska bir değiskene ihtiyacımız var (tumiller)
print_r($tumiller);

#verilen dizilerde elemanlar aynıysa elemanları dönderir.
#verilen dizilerde elemanlar aynıysa farklıysa dönderir.
echo "<br><br>";
$dizi1 = array(1,3,5);
$dizi2 = array(1,2,3);
$dizi3 = array(1,5,3);
$ortak_bul = array_intersect($dizi1, $dizi2, $dizi3);
print_r($ortak_bul);

$dizi1 = array(1,2,3);
$dizi2 = array(4,5,6);
$ortak_bul = array_diff($dizi1, $dizi2 );
echo "<br><br>";
print_r($ortak_bul);
echo $ortak_bul["0"];
echo "<br><br>";
foreach ($ortak_bul as $item => $value){
    echo " item : " .$item." degeri : ".$value;
}


#dizide tekrarananları silme
$tekrarli_dizi=array(1,1,2,3,3,4,5,5,6,6,6,6,6,7,8,9,9,10);
$deg=array_unique($tekrarli_dizi);
echo "<br><br>";
print_r($deg);

#tek satırda dizi sıralama fonksyonu implode ve split fonksyonu explode
$uzundizi = array(5,4,4,35,5,43,3,3,45,4,645,65,756,7,231);
echo "<br><br>";
$imp = implode(" ||| ",$uzundizi);
echo $imp;
echo "<br><br>";
$exp = explode("|","hell|no|thanks");
echo $exp["0"];

#diziden rasgele eleman al
echo "<br><br>";
echo array_rand($uzundizi);
#farklı indislerde almak  mümkün
$rasgeleindis=array_rand($akdeniz_bolgesi,2);
echo $rasgeleindis["0"]." ".$rasgeleindis["1"];

#*********sorting********#
$eqdiz = array(
    "baskent" => "ankara",
    "nuke" => "semaver",
    "gun" => "ak-51",
    "guntericindegaldim" => "ab221"
);
$eqdiz2 = array(7,4,25,36,234,534,543,642,12,3523);

asort($eqdiz);//küçük büyük harfe duyarlı değildir. k ten b sıralar
print_r($eqdiz);
echo "<br>asort<br>";
asort($eqdiz);//indis değerleri korunur kden b sıralar
print_r($eqdiz2);
echo "<br>sort<br>";
sort($eqdiz);//asorttan farkı indis değerleri Php tarafından verilir.
print_r($eqdiz);
echo "<br>arsort<br>";
arsort($eqdiz);
print_r($eqdiz);
echo "<br>rsort<br>";
rsort($eqdiz);#arsorttan farkı indis değerlerini php tarafından almasıdır.
print_r($eqdiz);
echo "<br>shuffle<br>";
shuffle($eqdiz);#rasgele dağıltır
print_r($eqdiz);


?>

