<?php

if(isset($_GET['url'])){
    switch ($_GET['url']){

        case 'tulis_pengaduan':
        include 'tulis_pengaduan.php';
        break;

        case 'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;

        case 'tanggapi_laporan';
        include 'tanggapi_laporan.php';
        break;
        
        case 'beri_tanggapan';
        include 'beri_tanggapan.php';
        break;

        case 'lihat_tanggapan_petugas';
        include 'lihat_tanggapan_petugas.php';
        break;

        case 'tambah_petugas';
        include 'tambah_petugas.php';
        break;


        default:
        echo "halaman tidak ditemukan";
        break;
    }
}
else{
    echo "selamat datang dipengaduan masyarakat peduli kita,dimana digunakan untuk melaporkan tindakan yang menyimpang
    dari ketentuan.<br> ";
    echo "Silahkan melakukan pengaduan terkait masalah yang ada ada di sekitar masyarakat.";
}