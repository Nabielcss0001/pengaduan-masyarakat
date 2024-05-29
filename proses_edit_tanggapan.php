<?php 
session_start();
$isi_tanggapan      =$_POST['isi_tanggapan'];
$id_tanggapan       =$_POST['id_tanggapan'];

include 'koneksi.php';

$sql = "UPDATE tanggapan set tanggapan = '$isi_tanggapan' where $id_tanggapan ;";

$query = mysqli_query($koneksi, $sql);

if ($query){
    echo "<script>alert('tanggpaan Sudah Tersimpan.');
    window.location.assign('petugas.php');</script>";
}else{
    echo "<script>alert('tanggapan Gagal Tersimpan.');
    window.location.assign('petugas.php');</script>";
}
?>