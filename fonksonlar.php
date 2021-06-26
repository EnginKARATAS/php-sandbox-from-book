<?php
#declare(strict_types = 1); php tür dönüşümü nu oto yapmaz bunun sayenside..fakat çalışmıyor.
function sa ($ad,$soyad="beyaztaş"){
    echo $ad.$soyad;
}
sa("engin");

$carp=4;#*************

function bol($sayi1,$sayi2){
    global $carp;#***************
    $carp=5;##carp degisirse  $carp=4;ifadesi 4 olarak kalır. yukarıdaki 4ü 5 yapmak için referans ile gösterilir.
    $deger = $sayi1/$sayi2*$carp;
    #--------
    $amp =5.0;
    return $deger;
}


echo $carp;
$hesapla =  bol(10,5);
echo $hesapla;

function cikar(&$amp){
    $amp =5.0;#fonksyon içinde dışarıdaki bir değişkeni değiştirmek istersek & ampersand işaretini kullanırız.
    return $amp;
}
echo"<br>";
$amp = 4.4;
echo $amp."<br>";
cikar($amp);
echo $amp."<br>";

#endirekt özyinemeli
function ilk($a=1){

    if ($a<10):
        echo $a;
        iki($a);
    else : return;
        endif;

}
function iki($a){
    $a++;
    ilk($a);
}

ilk();

#array gönderme:
echo "<br> array gönderme<br>";
function fonk_dizi($refer){
    foreach ($refer as $item){
        echo $item;
    }
}

$cek = null;
fonk_dizi(array("sa",4,"as",3));#bu ne ya obje dönüyor array, müthiş değil mi
global $cek;
echo "<br>"."arraydan bilgileri çekme". "<br>";
#arraydan bilgileri çekme
function fonk_dizicek($gelenArray){

        for ($a=0; $a<count($gelenArray) ; $a++){
            echo $a." ". $gelenArray[$a];
        }


    return ;
}

$deger = fonk_dizicek(array("a","b","c","d","e"));

echo "<br><br>";
#parametrelerin kaç tane olduğunu saymak, isimlerini almak..

function ornek(){
    $parametre= func_num_args();//parametre sayısını al
    echo $parametre;
    if ($parametre == "0"){//{parametre yoksa işlem yapma
        return;
    }
    if ($parametre == "1"){
        echo func_get_arg(0);
    }
    else{//birden çok parametre
        $parametreler = func_get_args();
        foreach ($parametreler as $yazdir){
            echo $yazdir."<br>";//listeli olarak yaz
        }
    }
}
ornek();
ornek("paramaterofgood");
echo "<br><br>";
ornek("1",44,"afr",22,2,2,2,2);
echo "<br><br>";
echo "diziye for içinde indis degeri atama" ;

#diziye for içinde indis degeri atama
function uret ($basla, $bitir)   {
    $a = 4;
    for ($i=$basla;$i<$bitir;$i++){
        $dizi[] = $i;
    }
    return $dizi;
}

$calistir =  uret(1,100);
echo '<pre>'; print_r($calistir); echo '</pre>';
echo (memory_get_peak_usage()/1024)."kb";

echo  "<br><br>";

#var dump değişkene ait türü verir
echo "#var dump değişkene ait türünü ve parantez içerisinde değerini verir<br><br>";
echo "#var dump return to us veraible`s type and its value in brackets<br><br>";
$er = 4;
var_dump($er);


