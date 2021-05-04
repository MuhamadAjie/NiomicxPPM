<?php
    echo "Diketahui Setyo Mempunyai 3 Lembar Uang Rp. 10000<br>";
    echo "4 Lembar Uang Rp. 5000<br>";
    echo "Dan 5 Lembar Uang Rp. 20000<br>";
    echo "Ia Membeli Mainan Seharga Rp. 55000<br>";
    echo "Ditanyakan Sisa Uang Setyo Setelah Membeli Mainan<br>";
    echo "=========================================<br>";
    echo "Uang Setyo<br>";
    $uangSepuluhRibu = 10000 * 3;
    echo "3 lembar 10000 (3x10000) = $uangSepuluhRibu<br>";
    $uangLimaRibu = 5000 * 4;
    echo "4 lembar 5000 (4x5000) = $uangLimaRibu<br>";
    $uangDuaPuluhRibu = 20000 * 5;
    echo "5 lembar 20000 (5x20000) = $uangDuaPuluhRibu<br>";
    $totalUangSetyo = $uangSepuluhRibu + $uangLimaRibu + $uangDuaPuluhRibu;
    echo "Total Uang Setyo = $totalUangSetyo<br>";
    echo "=========================================<br>";
    $hargaMainan = 55000;
    $sisaUangSetyo = $totalUangSetyo - $hargaMainan;
    echo "Maka Sisa Uang Setyo Adalah (Total Uang - Harga Mainan) = $sisaUangSetyo";
?>