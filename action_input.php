<?php
    include "koneksi.php";
    // Kirimkan variabel
    $nisn = mysqli_real_escape_string($conn, $_POST['nisn']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $kompetensi = mysqli_real_escape_string($conn, $_POST['kompetensi']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
    $hobi = mysqli_real_escape_string($conn, $_POST['hobi']);

    // validasi NISN Siswa dalam database
    $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nisn FROM siswa WHERE nisn='$nisn'"));
    if ($cek >= 1) {
    ?>
        <script language="JavaScript">
            alert('NISN sudah didaftarkan! Silahkan isikan NISN yang lain');
            document.location = 'index.php';
        </script>
    <?php
    }

    // input data ke tabel siswa dalam database
    $input = "INSERT INTO siswa (nisn, nama, kompetensi, alamat, telepon, hobi) VALUES ('$nisn', '$nama', '$kompetensi', '$alamat', '$telepon', '$hobi')";
    $query_input = mysqli_query($conn, $input);
    if ($query_input) {
        // Jika sukses
    ?>
        <script language="JavaScript">
            alert('Data Siswa Berhasil Diinput!');
            document.location = 'index.php';
        </script>
    <?php
    } else {
        // Jika gagal
        echo "Data siswa gagal diinput, silahkan coba lagi!";
    }

    // Tutup koneksi engine MySQL
    mysqli_close($conn);
?>