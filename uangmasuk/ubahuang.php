<?php 
  session_start();
  if(!isset($_SESSION['login'])) {
    header("Location: ../login.php");
  }
  require '../templates/header.php';
  require '../templates/asside.php';
  require '../functions.php';

  $um = query("SELECT * FROM uangmasuk")[0];

  if(isset($_POST['submit'])) {
    if(ubahuang($_POST) > 0) {
      echo "
        <script>
          alert('Jumlah Uang Masuk Telah Diubah');
          document.location.href= 'index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Jumlah Uang Masuk Gagal Diubah');
          document.location.href= 'ubahuang.php';
        </script>
      ";
    }
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Uang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Uang Masuk</a></li>
              <li class="breadcrumb-item active">Ubah Uang Masuk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-sm-6">
                <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $um['id'] ?>">
                  <div class="form-group">
                    <label for="asaluang">Asal Uang</label>
                    <input type="text" name="asaluang" class="form-control" id="asaluang" value="<?= $um['asal_uang'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="jumlahuang">Jumlah Uang</label>
                    <input type="number" name="jumlahuang" class="form-control" id="jumlahuang" value="<?= $um['jumlahuang'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="tgl" value="<?= $um['tgl'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="3"><?= $um['keterangan'] ?></textarea>
                  </div>
                  <a href="index.php" class="btn btn-warning">Cancel</a>
                  <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require '../templates/footer.php'; ?>