<?php 
  session_start();
  if(!isset($_SESSION['login'])) {
    header("Location: ../login.php");
  }

  require '../templates/header.php';
  require '../templates/asside.php';
  require '../functions.php';

  $uangmasuk = query("SELECT * FROM uangmasuk");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Uang Masuk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Uang Masuk</a></li>
              <li class="breadcrumb-item active">Home</li>
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
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <a href="tambahuang.php" class="btn btn-primary">Tambah Uang Masuk</a>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Asal Uang</th>
                <th>Jumlah Uang</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tbody>
                <?php 
                  $i = 1;
                  foreach($uangmasuk as $um) :
                ?>
                <tr>
                  <th><?= $i++; ?></th>
                  <td><?= $um['asal_uang'] ?></td>
                  <td><?= $um['jumlahuang'] ?></td>
                  <td><?= $um['tgl'] ?></td>
                  <td><?= $um['keterangan'] ?></td>
                  <td>
                    <a href="ubah.php" class="badge badge-success">Ubah</a>
                    <a href="hapus.php" class="badge badge-danger">Hapus</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require '../templates/footer.php'; ?>