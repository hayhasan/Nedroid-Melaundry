<?php
include 'koneksi.php';
session_start();
$user = $_SESSION['user'];
$id = $user['id'];

        $sqledit = "Update data_user set status = 'Reguler Pass' where id='$id'";
        if ($koneksi->query($sqledit) === TRUE) {
            echo "<script>alert('Berhasil langganan');  window.location = 'account.php'; </script>";
          } else {
            echo "Error updating record: " . $koneksi->error;
          }
    
    mysqli_close($koneksi);
?>