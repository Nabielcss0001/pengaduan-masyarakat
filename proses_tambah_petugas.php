<?php 
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$kata_sandi = $_POST['kata_sandi'];
$telp = $_POST['telp'];

include ('koneksi.php');

$sql = "insert into petugas values ('$id_petugas','$nama_petugas','$username','$kata_sandi','$telp');";

$query = mysqli_query($koneksi, $sql);
if($query){
    echo "<script>alert('selamat anda berhasil mendaftar.'); window.location.assign('petugas.php');</script>";
}else{
    echo "<script>alert('anda gagal mendaftar silahkan cek apakah data sudah benar.'); window.location.assign('petugas.php');</script>";
}
