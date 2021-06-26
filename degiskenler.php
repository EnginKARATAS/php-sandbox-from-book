<?php
$degisken1 = "13 kere selam olsun";
echo (int)$degisken1;
echo "</br>";

$degisken2 = "selam olsun";
$deg2=(int)$degisken2;
echo "</br>";

#değişken değerleri başına (int)vb yazarak değişmemekteysen değişkene ata
echo gettype($degisken1);
echo "</br>";
echo gettype($deg2);

#değişken kullanıldıktan sonra kill edilebilir. Çoklu öldürme için unset($deg2, $degisken1, $degisken1) veya settype($degisken1,"türü"); kullanılabilir.
unset($deg2);
echo @($deg2);//hata bastırma operatörleri
echo @$deg2;

$ad = "engin";
$soyad = "karatas";
$adres = "barış mah bla bla bla 330 % 44 cd ";
echo  $ad." ".$soyad." ".$adres;
unset($ad, $soyad, $adres);//unsetle kil ettğiimiz için aşağıda bunlar ney diyor
echo  $ad." ".$soyad." ".$adres;

echo "****************</br></br>";

#define() kullanmak sğrğm hatalarına sebep olur.const ile aynı işi yapar
 const altinoran = 1.6555;
 echo altinoran;
 const altinoran2 = "birnokta5";
 echo altinoran2;

 define(NAMES,array("sa","as","mrb"));
 print_r(NAMES);

 echo "\n". 3.9%6;#3, her zaman en büyüğe yuvarlar 2.1 .2.9, 3 olurlar

 echo var_dump(6==5);



