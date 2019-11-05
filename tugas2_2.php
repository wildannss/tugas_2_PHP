<?php

    $beli=50000;
    $jual=80000;
    $untung=($jual-$beli)/$jual*100;

    echo "Jual = 80000";
    print ("<br />");
    echo "Beli = 50000";
    print ("<br />");    
    echo "Keuntungan = ".$untung."%";
    print ("<br />");
    echo "Jawaban : ".$untung."%";

?>