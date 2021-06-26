<?php
$sifre ="enginkaratas";
#echo password_hash($sifre,PASSWORD_DEFAULT);
$sonuc = '$2y$10$ND4jDnHfZ08J/9XFHH4GwOUIepl3fMPCeb401ylgbRFv6nzO4AyI.';
if (password_verify($sifre,$sonuc)){
    echo "parola onaylandı";
}
else echo  "onaylanmadı";