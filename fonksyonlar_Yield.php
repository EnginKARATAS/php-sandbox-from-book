<?php

#YİELD: Yukarıdakini yield ile yapalım

function uret2 ($basla, $bitir)   {
    for ($i=$basla ; $i<$bitir ; $i++){
        yield $i;
    }

}
$calistir2 = uret2(1,1000);
foreach ($calistir2 as $item){
    echo $item."<br>";
}
echo (memory_get_peak_usage()/1024)."kb";
