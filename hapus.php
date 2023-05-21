<?php
include "koneksi.php";

// Ambil NISN yang akan dihapus
$nisn = $_GET['hapus'];

// Hapus data
$hapus = "DELETE FROM siswa WHERE nisn='$nisn'";
$kirim_hapus = mysqli_query($conn, $hapus);

// redirect
header("Location: view_data.php");
exit();
?>