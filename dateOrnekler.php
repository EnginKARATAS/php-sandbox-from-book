<?php
echo "doğalı kaç gün olmuş?";
$mkt = mktime(0,0,0,9,23,1999);
$nowtime = time();

$kacYasindayimSaniye =$nowtime-$mkt;
$gun = $kacYasindayimSaniye/86400;
$kacyasindayimGunAyYil = date("d/m/y H.i.s",$kacYasindayimSaniye);
echo "<br>".floor($gun). "  gundur dünyadayım";
echo "<br>".floor($gun/365). "  yıldır dünyadayım";

echo "<br><br>";

echo "günün sözü uygulaması";
echo "<br>";
$gun = date("d");
$soz22= "hello bu gün 22. günün sözü";
$soz23= "hello bu gün 23. günün sözü";
$soz24= "hello bu gün 23. günün sözü";
$soz25= "hello bu gün 24. günün sözü";

$gunlukSoz = "soz$gun";
echo $$gunlukSoz;




echo "<br><br>";
echo "4saat 43dakika önce demek için (geçen süreyi detaylandır)";
echo "<br>";

function zamanDetaylandir($tarih){
    $sureCevir = strtotime($tarih);#bu fonksyon 14:04:4 vb gelen bir tarihi Unixe çevirir
    $currentDate = new DateTime('@'.$sureCevir);#D1
    $nowDate =     new DateTime('@'.time());    #D2
    return $currentDate -> diff($nowDate)
    -> format('%h saat %i dakika önce');
}

$tarih = '2020-08-21 14:05:14';
$tarih2 = '2022-08-21 14:05:14';
echo "<br>";
echo zamanDetaylandir($tarih);


