<html>

<head>
    <link rel="stylesheet" href="style2.css">
    <title>View Data Siswa</title>
</head>

<body>
    <br>
    <h1>
        <center><b>DATA SISWA</b></center>
    </h1><br>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr class="atasan">
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kompetensi Keahlian</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Hobi</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php
        include "koneksi.php";
        // view data siswa di dalam database
        $Lihat = "SELECT * FROM siswa ORDER BY nisn";
        $Tampil = mysqli_query($conn, $Lihat);
        $nomer = 0;
        while ($hasil = mysqli_fetch_array($Tampil)) {
            $nisn = stripslashes($hasil['nisn']);
            $nama = stripslashes($hasil['nama']);
            $kompetensi = stripslashes($hasil['kompetensi']);
            $alamat = stripslashes($hasil['alamat']);
            $telepon = stripslashes($hasil['telepon']);
            $hobi = stripslashes($hasil['hobi']); {
                $nomer++;
                ?>

                <tr align="center" height="30">
                    <td>
                        <?= $nomer ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $nisn ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $nama ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $kompetensi ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $alamat ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $telepon ?>
                        <div align="center"></div>
                    </td>
                    <td>
                        <?= $hobi ?>
                        <div align="center"></div>
                    </td>
                    <td><a href="hapus.php?hapus=<?= $nisn ?>"
                            onclick="return confirm('Yakin mau menghapus data siswa <?= $nama ?>')"><img
                                src="assets/icons/trash-can.png" alt="" width="25px"></a></td>
                    <td><a href="edit.php?edit=<?= $nisn ?>" onclick="return confirm('Edit data siswa <?= $nama ?>')"><img
                                src="assets/icons/pencil.png" alt="" width="20px"></a></td>
                </tr>

                <?php
            }
        }
        mysqli_close($conn);
        ?>
        <tr class="bawahan1">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr class="bawahan2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr class="atasan">
            <th> <a href="index.php"><img src="assets/icons/plus.png" alt="" width="30px"></a></th>
            <th><a href="index.php" class="opsiplus">Tambah Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr class="atasan">
            <th> <a href="view_data.php"><img src="assets/icons/eye.png" alt="" width="30px"></a></th>
            <th> <a href="view_data.php" class="opsiplus">Lihat Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr class="atasan">
            <th> <a href="hapusall.php"><img src="assets/icons/delall.png" alt="" width="30px"></a></th>
            <th> <a href="hapusall.php" class="opsiplus" onclick="return confirm('Yakin mau menghapus semua data siswa?')">Hapus Semua Data</a></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>
</body>

</html>