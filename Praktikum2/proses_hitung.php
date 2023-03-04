<?php 
// Mengambil data input
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];


    if ($produk == 'TV'){
        $total_harga = 4200000 * $jumlah;
    } elseif ($produk == 'Kulkas'){
        $total_harga = 3100000 * $jumlah;
    } elseif ($produk == 'Mesin Cuci'){
        $total_harga = 3800000 * $jumlah;
    } else {
        $total_harga = '';
    }



?>