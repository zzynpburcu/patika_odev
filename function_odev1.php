<?php
function ucgen($sayi){
    for($i=1;$i<=$sayi;$i++){
        $j=$i;
        while($j >= 0) {
            echo "*\n";
         $j--;
        }
        echo "<br>";

    }


}

ucgen(15);