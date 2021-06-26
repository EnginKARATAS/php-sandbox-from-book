<?php

$r = "     asdd33asdasdas        ";
$r = rtrim($r); //sağdan  boşlukları al
echo ltrim($r); //soldan boşukları al


function KlasorSil($dizin){
    if ($dosya = opendir($dizin)){
        while ($sil = readdir($dosya)){
            if ($sil = '.' && $sil !='..'){
                if (is_dir($dizin.$sil)){
                    if (!KlasorSil($dizin.$sil)){
                        return false;
                    }
                    elseif (is_file($dizin.$sil)){
                        if (!unlink($dizin.$sil))
                            return false;
                    }
                }
            }
            closedir($dosya);
            if (!@rmdir($dizin))
                return false;
            return true;
        }
        echo KlasorSil("ano");
    }
}

