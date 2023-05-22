<?php
include "koneksi.php";

// Ambil NISN yang akan diedit
$nisn = $_GET['edit'];

// Ambil data siswa berdasarkan NISN
$Lihat = "SELECT * FROM siswa WHERE nisn='$nisn'";
$Tampil = mysqli_query($conn, $Lihat);
$hasil = mysqli_fetch_array($Tampil);

?>

<!-- Tampilkan Form -->
<html>
    <head>
        <link rel="stylesheet" href="assets/css/style3.css">
        <title>Edit Data Siswa <?=$hasil['nama']?></title>
    </head>
    <body>
        <form action="simpan_edit.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><h1>EDIT DATA SISWA</h1></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                </tr>

                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">NISN</td>
                    <td><input type="text" name="nisn" class="inputan" value="<?=$hasil['nisn']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Nama</td>
                    <td><input type="text" name="nama" class="inputan" value="<?=$hasil['nama']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Kompetensi Keahlian</td>
                    <td><select name="kompetensi" class="inputan-jurusan">
                            <option value="<?=$hasil['kompetensi']?>"><?=$hasil['kompetensi']?></option>
                            <option value="SIJA">SIJA</option>
                            <option value="KGSP">KGSP</option>
                            <option value="TMPO">TMPO</option>
                            <option value="KJIJ">KJIJ</option>
                            <option value="TFLM">TFLM</option>
                            <option value="TEDK">TEDK</option>
                            <option value="TTL">TTL</option>
                            <option value="TME">TME</option>
                    </select></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Alamat</td>
                    <td><input type="text" name="alamat" class="inputan" value="<?=$hasil['alamat']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Telepon</td>
                    <td><input type="text" name="telepon" class="inputan" value="<?=$hasil['telepon']?>"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Hobi</td>
                    <td><input type="text" name="hobi" class="inputan" value="<?=$hasil['hobi']?>"></td>
                    <input type="hidden" name="nisn_asli" value="<?=$hasil['nisn']?>">
                </tr>
                <tr>
                    <td height="50">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="submit" value="Simpan Edit" class="button">&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
            </table>
        </form>
    </body>
</html>



