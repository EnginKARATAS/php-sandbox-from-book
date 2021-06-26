<?php
$deneme = 3;

$dizi = array(1,3,2,5,6,7,8,5,3);



if ($sonuc = in_array($deneme,$dizi)) {
    echo "deneme sayısı dizi içindedir";
    echo "<br>";
    echo $sonuc;
}
else {
    echo "sonuç bulunamadı";
}