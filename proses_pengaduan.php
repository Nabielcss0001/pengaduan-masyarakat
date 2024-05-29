<?php
session_start();
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik           = $_SESSION['nik'];
$isi_laporan   = $_POST['isi_laporan'];
$lokasi_foto   = $_FILES['foto']['tmp_name'];
$nama_foto     = $_FILES['foto']['name'];
$status        = 0;
include 'koneksi.php';
$folder_foto   = 'foto/'; // Tentukan folder tempat menyimpan foto

if(move_uploaded_file($lokasi_foto, $folder_foto . $nama_foto)){
    $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare statement
    $stmt = mysqli_prepare($koneksi, $sql);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssi", $tgl_pengaduan, $nik, $isi_laporan, $nama_foto, $status);
    
    // Execute statement
    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('Pengaduan Sudah Tersimpan.');
        window.location.assign('masyarakat.php');</script>";
    }else{
        echo "<script>alert('Pengaduan Gagal Tersimpan.');
        window.location.assign('tulis_pengaduan.php');</script>";
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
}
?>