<?php
touch("yeni_dosya.txt");//dosya oluşturma
if (touch("yeni_dosya.txt")){
    echo "dosya oluşturuldu";
}
else{
    echo "dosya yoktur";
}
#yukarıdaki kodlar aşağıdakine göre gereksizdir.
#fopen a+ ile yoksa zaten oluşturur.

//dosya yoksa oluştur ve aç
$dosya = fopen("fopenIle.txt","a+bt");
fwrite($dosya,"dosyaya eklenecek içerik burada yazılır \n");
fclose($dosya);

#okuma
$dosya = fopen("fopenIle.txt","rb");//byi karıştırma her seferinde koy sen
echo fread($dosya,filesize("fopenIle.txt"));
fclose($dosya);

#array ile yazalım ve okuyalım

$dizi = array("merhaba "," benim adım "," engin "," whatsup nigga "," sky walker naber bro");
$handle = "arrayileokuyaz.txt";
$dosya2 = fopen($handle,"r+b");
foreach ($dizi as $item){
    fwrite($dosya2,"$item\n");
}
echo fread($dosya2,filesize($handle));

fclose($dosya2);

#array ile satır satır yazalım ve okuyalım

$dizi = array("merhaba "," benim adım "," engin "," whatsup nigga "," sky walker naber bro");
$handle = "arrayileokuyaz.txt";
$dosya2 = fopen($handle,"r+b");

echo "<br><br> php kitap durum <br><br>";
while(!feof($dosya2)){
    echo fgets($dosya2)."<br>";
}
fclose($dosya2);


#dosya oluştur ve ad değiştir
echo "dosya oluştur ve ad değiştir";
#ad değiş
touch("y.txt");
rename("y.txt","selam.txt");//ad değiştirmek yerine taşıdı

#başka bir yere ad değiş yani taşı işlemi;
touch("x.txt");
rename("x.txt","klasor/selam.txt");//ad değiştirmek yerine taşıdı ctrl x + ctrl v

#kopyala
touch("zuzu.txt");
copy("zuzu.txt","klasor/yenizuzu.txt");#ctrl c + ctrl v
if (file_exists("silinmekicindogdum.txt")):
    unlink("silinmekicindogdum.txt");
else:
    echo "mevcut değil. silindi heralde";//ife girmesi için dosyaolustur.php çağırılmalıdır.
endif;

#dosya okuma aralığı : baştan sondan okunabilir.
#baştan 5.harften sonra okuma:
$dosya = fopen($handle,"r+b");
fwrite($dosya,"selaamlarefenim");
echo fseek($dosya,5,SEEK_SET)."<br><br>";
fclose($dosya);

$dosya
