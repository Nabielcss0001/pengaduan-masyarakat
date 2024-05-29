
          <!-- Page Heading -->
          <h1><div class="card shadow">
<div class="card shadow">            
<div class="card-header">
    <a href="masyarakat.php" class="btn bnt-primary btn-icon-split">
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
        <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('y/m/d'); ?>">

</div>
<div class="form-group">
    <label style="font-size: 14px">isi laporan</label>
    <textarea name="isi_laporan" class="form control" required></textarea>
</div>
<div class="form-group">
    <label style="font-size: 14px">foto</label>
    <input type="file" reqiored class="form-control" name="foto" accept="image/*">
</div>
<div class="form-group">
<button type="submit" a href="proses-pengaduan.php" class="btn btn-primary btn-user btn-block">
                      SIMPAN 
                    </button>

</div>
</form>
</div></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
