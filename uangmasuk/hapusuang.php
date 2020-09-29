<?php 
  session_start();
  if(!isset($_SESSION['login'])) {
    header("Location: ../login.php");
  }

  require '../functions.php';

  $id = $_GET['id'];
  if(hapusuang($id) > 0) {
    echo "
      <script>
        alert('Data Uang Masuk Telah Dihapus');
        document.location.href= 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data Uang Masuk Gagal Dihapus');
        document.location.href= 'index.php';
      </script>
    ";
  }
?>