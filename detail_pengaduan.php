<?php 
$id = $_GET['id'];
if (empty($id)){
    header("location:masyarakat.php");
}
include 'koneksi.php';  
$query = mysqli_query($koneksi, "SELECT*FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
?>
          <!-- Page Heading -->
          <h1><div class="card shadow">
<div class="card shadow">            
<div class="card-header">
    <a href="?url=lihat-pengaduan" class="btn bnt-primary btn-icon-split">
    <span class="icon text-white-5">
        <i class="fa fa-arrow-left"></i>
    </span>
    <span class="text">kembali</span>
</a>
</div>
<div class="card-body">
    <form method="post" action="proses_pengaduan.php"  enctype="multipart/form-data">

    <div class="form-group">
        <label style="font-size: 14px">tgl pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'];?>">

</div>
<div class="form-group">
    <label style="font-size: 14px">isi laporan</label>
    <td name="isi_laporan" class="form control" required><?= $data['isi_laporan']?></td>
</div>
<div class="form-group">
    <label style="font-size: 14px">foto</label>
    <img src="foto/<?= $data ['foto'] ?>" width="300" >
</div>

</div>
</form>
</div></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
