<?php
for ($a=1;$a < 10;$a++){
    echo $a;
    if ($a == 5):
        echo "<br>döngü 10a kadardı fakat 5te break ile kestik, döngüyü kill ettik";
        break;
    endif;
}

?>
<br>
<?php
for ($a = 1; $a < 16; $a++) {//5 atlanacak 

    if ($a == 5) {
        continue;
    }
    echo $a;
}
?>
