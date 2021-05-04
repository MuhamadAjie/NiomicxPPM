<?php
    echo "Diketahui Harga 1 Bolpoin = Rp. 1750<br>";
    echo "Uang Rian  = 5 Lembar Rp. 5000<br>";
    echo "Jumlah Bolpoin = 1 Lusin = 12 Buah<br>";
    echo "Ditanyakan Berapa Uang Kembalian Rian ?<br>";
    echo "=========================================<br>";
    //1 lusin bolpoin = 12
    $jumlahBolpoin = 12;
    echo "Jumlah Bolpoin = $jumlahBolpoin<br>";

    //harga satuan 1750
    $hargaBolpoin = 1750;
    echo "Harga Satuan = $hargaBolpoin<br>";

    //uang rian 5 x 5000 = 25000
    $uangRian = 25000;
    echo "Jumlah Uang Rian (5x5000) = $uangRian<br>";

    $totalHarga = $jumlahBolpoin * $hargaBolpoin;
    echo "Total Harga (Jumlah Bolpoin x Harga Bolpoin = $totalHarga<br>";

    $uangKembalian = $uangRian - $totalHarga;
    echo "Uang kembalian (Jumlah Uang Rian - Total Harga)<br>";
    echo "=========================================<br>";
    echo "Maka Uang Kembalian Rian Adalah $uangKembalian";
?>