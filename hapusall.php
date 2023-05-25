<?php
include "koneksi.php";

// Hapus semua data
$hapus = "DELETE FROM siswa";
$kirim_hapus = mysqli_query($conn, $hapus);

// redirect
header("Location: view_data.php");
exit();
?>