<?php
session_start();
$id_tanggapan     = $_POST['id_tanggapan'];
$tgl_tanggapan    = $_POST['tgl_tanggapan'];
$id_pengaduan     = $_POST['id_pengaduan'];
$isi_tanggapan    = $_POST['isi_tanggapan'];
$id_petugas       = $_SESSION['id_petugas'];


include 'koneksi.php';

$sql = "insert into tanggapan values ($id_tanggapan, $id_pengaduan, '$tgl_tanggapan', '$isi_tanggapan', $id_petugas);";

$query = mysqli_query($koneksi, $sql);
    
    // Execute statement
    if ($query){
        echo "<script>alert('tanggpaan Sudah Tersimpan.');
        window.location.assign('petugas.php');</script>";
    }else{
        echo "<script>alert('tanggapan Gagal Tersimpan.');
        window.location.assign('petugas.php');</script>";
    }
   