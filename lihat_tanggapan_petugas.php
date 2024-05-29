<?php 
//fungsi pemanggilan data
$id = $_GET['id'];
if (empty($id)){
    header("location:masyarakat.php");
}

//query connection
include 'koneksi.php';  
$query = mysqli_query($koneksi, "SELECT*FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' 
AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
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
    <?php
    if(mysqli_num_rows($query)==0){
        echo "<div class='alert alert-danger'>maaf pengaduan anda belum ditanggapi oleh petugas.</div>";
    }else{
        $data = mysqli_fetch_array($query);
     ?>
    
    <form method="post" action="proses_edit_tanggapan.php"  enctype="multipart/form-data">

    <div class="form-group">
        <label style="font-size: 14px">tgl pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'];?>">

</div>

    <div class="form-group">
        <label style="font-size: 14px">tanggal tanggapan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_tanggapan'];?>">

</div>
<div class="form-group">
        <label style="font-size: 14px">id_tanggapan</label>
        <input type="text" name="id_tanggapan" class="form-control" readonly value="<?= $data['id_tanggapan'];?>">

</div>
<div class="form-group">
    <label style="font-size: 14px">isi laporan</label>
    <td name="isi_laporan" class="form control" required><?= $data['isi_laporan']?></td>
</div>
<div class="form-group">
    <label style="font-size: 14px">tanggapan</label>
    <textarea name="isi_tanggapan" class="form control" required><?= $data['tanggapan']?></textarea>
</div>
<div class="form-group">
    <label style="font-size: 14px">foto</label>
    <img src="foto/<?= $data ['foto'] ?>" width="300" >
</div>
<div class="form-group">
<button type="submit" a href="proses_edit_tanggapan.php" class="btn btn-primary btn-user btn-block">
                      SIMPAN 
                    </button>
</div>
</form>
    <?php } ?>
</div></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
