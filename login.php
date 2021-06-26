
<form action="" method="POST">
    <input type="text" name="ad"placeholder="adınız">
    <input type="text" name="soyad" placeholder="soyadınız">
    <input type="submit" value="Gönder">
</form>
<?php
if ($_POST){
    if ($_POST["soyad"] != "123"):
        echo "soyad yanlis";
        endif;
    echo "post oldu ".$_POST["ad"]." ".$_POST["soyad"];
    switch ($_POST["ad"]) {
        case"engin":
            echo "hosgeldin engin";
            break;
        case"yahya":
            echo "hosgeldin yahya";
            break;
        default:
            echo "Hoşgeldin sayın üye!";
            break;


    }
    if ($_POST["soyad"]):
        $soyad = $_POST["soyad"];
        if ($soyad>=0&&$soyad<100):
            echo "puanınız 100 üzerinden".$soyad;
            $soyad /= 20;#beş üzerinden puan
            echo "puanınız 5 üzerinden net".$soyad;

            settype($soyad,"integer");
            echo "puanınız 5 üzerinden ".$soyad;

            switch ($soyad){
                case 3:
                case 4:
                case 5:
                    echo "<b>Puanınız : </b> notunuz orta üstüdür";
                    break;

                case 2:
                    echo "puanınız düşük";
                    break;
                case 1:
                    echo "puanınınz çok düşük. <b>Puanınız : </b>".$soyad;
                    break;
            }
            else:
            echo "Notunuz 0 ile 100 aralığında olmalıdır";
            endif;

    endif;
}
?>
