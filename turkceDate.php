<?php
$gunler = array(
    'pazartesi','salı','çarşamba','perşembe','cuma','cumartesi','pazar'
);
$aylar = array(
    'Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'
);
//gün değerini almak için
echo $gunler[date("w")];
//ay değerini ekrana yazdırmak
echo $aylar[date("n")];

echo "<br><br>";
//Birlikte kullanım için
echo date("d")." ".$aylar[date("n")]." ".date("Y")." - ".$gunler[date("w")];

#phpde yerel zaman ayarlarına çekilebilecek ayarlar vardırç: tarihiyle ilgilenecez
echo "<br>ya da aşağıda hazır tr<br>";
setlocale(LC_TIME,"tr-TR");
#tarihin çıktısını alalım
echo strftime(" %d %B %Y, %A");
echo "<br><br>";
echo strftime(" %d %B %Y, %A",strtotime("-1 day"));#bir gün öncesi
echo "<br><br>";
echo date_default_timezone_get();#kullandığımız zaman dilimi
echo "<br><br>";
$tarih = new DateTime();
print_r($tarih);
date_default_timezone_set("Europe/Istanbul");#kullandığımız zaman dilimi#sonucu true döner
echo date_default_timezone_get();#kullandığımız zaman dilimi
echo " tarih türkiyeye ayarlandı";

echo "sınıfın direk ekrana yazdırılması sonucunda tarih, zaman tipi ve azaman diimi bilgileri çıktı olarak verecektir";
echo "<br><br>";
$tarih = new DateTime();
print_r($tarih);

#yukaroıda ıstanbul yapmanın ve ekrana tarihi yazdırmanın başka bir yöntemi...$tarih = new DateTime();
echo "tüm tarihler datetime sınıfından türemiştir";
$tarih ->setTimezone(new DateTimeZone('Europe/Istanbul'));
echo "<br><br>";
echo $tarih->format('d/m/Y H:i:s');






