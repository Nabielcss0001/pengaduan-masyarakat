<?php 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

include ('koneksi.php');

$sql = "insert into masyarakat values ('$nik','$nama','$username','$password','$telp');";

$query = mysqli_query($koneksi, $sql);
if($query){
    echo "<script>alert('selamat anda berhasil mendaftar.'); window.location.assign('login.php');</script>";
}else{
    echo "<script>alert('anda gagal mendaftar silahkan cek apakah data sudah benar.'); window.location.assign('register.php');</script>";
}
