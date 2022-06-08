<?php
function numberControl($s){
    return $s%3==0? "Değer 3'e tam bölünebilir." : "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı".($s+(3-($s%3)))." ' dır";
}

$deger =array_map('numberControl', $_POST);

echo "<pre>";
print_r($deger);
