<?php 
$username_petugas = $_POST['username_petugas'];
$password_petugas = $_POST['password_petugas'];

include 'koneksi.php';
$sql = "SELECT*FROM petugas WHERE username='$username_petugas' AND kata_sandi='$password_petugas'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['username']=$username_petugas;
    $data = mysqli_fetch_array($query);
    $_SESSION['username'] = $data['username'];
    $_SESSION['id_petugas'] = $data ['id_petugas'];
    $_SESSION['nik'] = $data ['nik'];
    
    header("location:petugas.php");

}else{
    echo"<script>alert('maaf sepertinya ada kesalahan'); window.location.assign('login_2.php'); </script>";
}