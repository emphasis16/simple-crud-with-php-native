<?php
include "koneksi.php";

// Kirimkan variabel
$nisn = mysqli_real_escape_string($conn, $_POST['nisn']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$kompetensi = mysqli_real_escape_string($conn, $_POST['kompetensi']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
$hobi = mysqli_real_escape_string($conn, $_POST['hobi']);

// Simpan nisn asli sebelum diubah
$nisn_asli = $_POST['nisn_asli'];

// update data ke tabel siswa dalam database
$input = "UPDATE siswa SET nisn='$nisn', nama='$nama', kompetensi='$kompetensi', alamat='$alamat', telepon='$telepon', hobi='$hobi' WHERE nisn='$nisn_asli'";
$query_update = mysqli_query($conn, $input);

if ($query_update) {
    # code...
    ?>
    <script language="JavaScript">
        alert('Data Siswa Berhasil Diinput!');
        document.location = 'view_data.php';
    </script>
    <?php
    header("Location: view_data.php");
} else {
    echo "Data siswa gagal diinput, silahkan coba lagi!";
}

?>