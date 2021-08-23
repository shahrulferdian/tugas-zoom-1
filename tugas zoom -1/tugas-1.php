<?php

    $tgl = 1;
    $bln = 1;

    $hasil = "SALAH";

    if( ($tgl >=20 && $tgl <=31 && $bln == 1) || ($tgl >=1 && $tgl <=28 && $bln == 2) ){
        $hasil = "AQUARIUS";
    }

    if( ($tgl >=21 && $tgl <=31 && $bln == 3) || ($tgl >=1 && $tgl <=19 && $bln == 4) ){
        $hasil = "ARIES";
    }

    if( ($tgl >=20 && $tgl <=30 && $bln == 4) || ($tgl >=1 && $tgl <=20 && $bln == 5) ){
        $hasil = "TAURUS";
    }

    if( ($tgl >=21 && $tgl <=31 && $bln == 5) || ($tgl >=1 && $tgl <=20 && $bln == 6) ){
        $hasil = "GEMINI";
        
    }
    
    if( ($tgl >=21 && $tgl <=30 && $bln == 6) || ($tgl >=1 && $tgl <=22 && $bln == 7) ){
        $hasil = "CANCER";
        
    }

    if( ($tgl >=23 && $tgl <=31 && $bln == 7) || ($tgl >=1 && $tgl <=22 && $bln == 8) ){
        $hasil = "LEO";
        
    }
    
    if( ($tgl >=23 && $tgl <=31 && $bln == 8) || ($tgl >=1 && $tgl <=22 && $bln == 9) ){
        $hasil = "VIRGO";
    }
    
    if( ($tgl >=23 && $tgl <=30 && $bln == 9) || ($tgl >=1 && $tgl <=22 && $bln == 10) ){
        $hasil = "LIBRA";
    }
    
    if( ($tgl >=23 && $tgl <=31 && $bln == 10) || ($tgl >=1 && $tgl <=21 && $bln == 11) ){
        $hasil = "SCORPIUS";
    }
    
    if( ($tgl >=22 && $tgl <=30 && $bln == 11) || ($tgl >=1 && $tgl <=21 && $bln == 12) ){
        $hasil = "SAGITTARIUS";
    }
    
    if( ($tgl >=19 && $tgl <=29 && $bln == 2) || ($tgl >=1 && $tgl <=20 && $bln == 3) ){
        $hasil = "PISCES";
    }
    
    if( ($tgl >=22 && $tgl <=31 && $bln == 12) || ($tgl >=1 && $tgl <=19 && $bln == 1) ){
        $hasil = "CAPRICORNUS";
    }

    echo '<h1>'.$hasil.'</h1>';
?>


