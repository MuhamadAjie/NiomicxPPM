<?php
    echo "Diketahui 100 Cabang Toko<br>";
    echo "Biaya Rp. 10000 untuk Toko ke-1<br>";
    echo "Biaya Rp. 30100 untuk Toko ke-68<br>";
    echo "Ditanyakan Biaya untuk Toko ke-81 ?<br>";
    echo "=========================================<br>";
    // Rumus Deret Aritmatika --> Un=a+(n-1)b
    echo "U1 = 10000 = a<br>";
    $U1 = 10000;
    $a = $U1;
    echo "U68 = 30100 = a+(67)b<br>";
    $U68 = 30100 - $a;
    $b = $U68 / 67;
    echo "Maka nilai b sama dengan $b<br>";
    echo "=========================================<br>";
    $jmlToko = 100;
    $biayaToko1 = 10000;
    for($i=1; $i <= $jmlToko; $i++){
        echo "Toko ke-$i = ".$biayaToko1."<br>";
        $biayaToko1 += $b;
    }
    echo "=========================================<br>";
    echo "Jadi Biaya untuk Toko Pak Rian yang ke-81 Adalah Rp. 34000";
?>