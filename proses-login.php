<?php 
$username = $_POST['username'];
$password = $_POST['password'];

include ('koneksi.php');

$sql = "SELECT*FROM masyarakat WHERE username='$username' AND kata_sandi='$password'";

$query = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['username'] = $username;
    $data = mysqli_fetch_array($query);
    $_SESSION['nik'] = $data ['nik'];
    $_SESSION['username'] = $data ['username'];


    header("location:masyarakat.php");
}
else{
    echo "<script>alert('anda gagal login silahkan cek kembali untuk melakukan login.'); window.location.assign('login.php');</script>";
}
