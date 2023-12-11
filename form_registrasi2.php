Isi Data Dibawah Ini :<hr>
<table cellpadding=5>
        <tr>
                <td> Nama : </td>
                <td> <input type="text" name="nama"> </td>
        </tr>
        <tr> 
                <td> Alamat : </td>
                <td> <textarea name="alamat"> </textarea><br> </td>
        </tr>
        <tr>
                <td> Tempat Lahir : </td>
                <td> <input type="text" name="tempat_lahir"><br> </td>
        </tr>
        <tr>
                <td>Tanggal Lahir :</td>
                <td><select id="tanggal" name="tanggal" required>
                        <?php
                        // Perulangan untuk tanggal dari 1 hingga 31
                        for ($i=1; $i<=31; $i++){
                            echo"<option value=\$i\">$i</option>";
                        }
                        ?>
                    </select>
                    Bulan
                    <select id="bulan" name="bulan" required>
                            <?php
                            // Perulangan untuk bulan dari 1 hingga 12
                            for ($i=1; $i<=12; $i++){
                                echo"<option value=\$i\">$i</option>";
                            }
                            ?>
                    </select>
                    Tahun
                    <select id="tahun" name="tahun" required>
                            <?php
                            // Perulangan untuk tahun dari 1950 hingga 2023
                            for ($i=1950; $i<=2023; $i++){
                                echo"<option value=\$i\">$i</option>";
                            }
                            ?>
                    </select>
                </td>
        </tr>
        <tr>
                <td> Jenis Kelamin : </td>
                <td> <input type="radio" name="jk" value="L">Laki-laki 
                     <input type="radio" name="jk" value="P">Perempuan<br> </td>
        </tr>
        <tr>
                <td> Pendidikan : </td>
                <td> <select name="pendidikan">
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select> <br> </td>
        </tr>
</table>
<input type="Submit" name="Simpan" value="Proses">
<input type="Reset" name="" value="Batal">