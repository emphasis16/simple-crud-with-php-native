<html>
    <head>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Input Data ke Database dengan PHP dan MySql</title>
    </head>
    <body>
        <form action="action_input.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><h1>INPUT DATA SISWA</h1></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                </tr>

                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">NISN</td>
                    <td><input type="text" name="nisn" class="inputan"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Nama</td>
                    <td><input type="text" name="nama" class="inputan"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Kompetensi Keahlian</td>
                    <td><select name="kompetensi" class="inputan-jurusan">
                            <option value="-">Pilih Kompetensi Keahlian</option>
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
                    <td><input type="text" name="alamat" class="inputan"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Telepon</td>
                    <td><input type="text" name="telepon" class="inputan"></td>
                </tr>
                <tr>
                    <td height="40">&nbsp;</td>
                    <td class="keterangan">Hobi</td>
                    <td><input type="text" name="hobi" class="inputan"></td>
                </tr>
                <tr>
                    <td height="50">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" name="submit" value="Submit" class="button">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="Reset" class="button">&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="button-view"><a href="view_data.php">View Data</a></button>
                    </td>
            </table>
        </form>
    </body>
</html>