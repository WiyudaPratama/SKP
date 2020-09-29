<?php 
  $conn = mysqli_connect("localhost", "root", "", "skp");

  function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }

  function tambahuang($post) {
    global $conn;

    $asaluang = htmlspecialchars(stripslashes($post['asaluang']));
    $jumlahuang = htmlspecialchars(stripslashes($post ['jumlahuang']));
    $tgl = htmlspecialchars(stripslashes($post['tgl']));
    $keterangan = htmlspecialchars(stripslashes($post['keterangan']));

    $sql = "INSERT INTO uangmasuk VALUES 
        ('', '$asaluang', '$jumlahuang', '$tgl', '$keterangan')
      ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
  }

  function ubahuang($post) {
    global $conn;

    $id = $post['id'];
    $asaluang = htmlspecialchars(stripslashes($post['asaluang']));
    $jumlahuang = htmlspecialchars(stripslashes($post ['jumlahuang']));
    $tgl = htmlspecialchars(stripslashes($post['tgl']));
    $keterangan = htmlspecialchars(stripslashes($post['keterangan']));

    $sql = "UPDATE uangmasuk SET
          asal_uang = '$asaluang',
          jumlahuang = '$jumlahuang',
          tgl = '$tgl',
          keterangan = '$keterangan'
        WHERE id = $id
      ";
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
  }

  function hapusuang($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM uangmasuk WHERE id = $id");
    return mysqli_affected_rows($conn);
  }
?>