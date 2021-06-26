<?php
$xa= 10;
while ( $xa < 7){
    echo "<b>SAYI : </b>".$xa."</br>";
    $xa++;
}
unset($xa);

$dizi = array('','x','y','z');

echo '<select name="iller">';
for ($a=1;$a < count($dizi);$a++){

    echo '<option value=" '.$a.' "> '.$a.' - '.$dizi[$a].' </option>';
}

foreach ($dizi as $item){
    echo '<option value=""> '.$item.' </option>';
}


