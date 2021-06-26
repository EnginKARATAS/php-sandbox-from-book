<?php
echo date('d.m.Y H:i:s');


$simdi = time();
$yarin = $simdi+86000;#saniye
echo "<br><br>";
echo date("d.m.Y H:i:s",$yarin);


$tarih = mktime(3,12,43,9,22,2020);
echo "<br><br>";
echo date("Y-m-d",$tarih);

?>