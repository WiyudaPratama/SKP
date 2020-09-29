<?php 
  session_start();
  if(!isset($_SESSION['login'])) {
    header("Location: ../login.php");
  }
  require '../templates/header.php';
  require '../templates/asside.php';
  require '../functions.php';

  if(isset($_POST['submit'])) {
    if(tambahuang($_POST) > 0) {
      echo "
        <script>
          alert('Jumlah Uang Masuk Telah Ditambahkan');
          document.location.href= 'index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Jumlah Uang Masuk Gagal Ditambahkan');
          document.location.href= 'tambahuang.php';
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
            <h1>Tambah Uang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Uang Masuk</a></li>
              <li class="breadcrumb-item active">Tambah Uang Masuk</li>
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
                  <div class="form-group">
                    <label for="asaluang">Asal Uang</label>
                    <input type="text" name="asaluang" class="form-control" id="asaluang">
                  </div>
                  <div class="form-group">
                    <label for="jumlahuang">Jumlah Uang</label>
                    <input type="number" name="jumlahuang" class="form-control" id="jumlahuang">
                  </div>
                  <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="tgl" value="<?= date("Y-m-d") ?>">
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
                  </div>
                  <a href="index.php" class="btn btn-warning">Cancel</a>
                  <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
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