<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
        <title>Pegawai</title>
        
    </head>
    <body>
        <?php
            include "koneksi.php";
        ?>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <a href="tambah_pegawai.php">
                        <div class="div btn btn-primary mb-4">
                            Tambah Data
                        </div>
                    </a>
                    <a href="gaji.php">
                        <div class="div btn btn-primary mb-4">
                            Ke Halaman Gaji
                        </div>
                    </a>
                </div>
        </br>
        <table border="1" class="table" cellpadding="15" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>golongan</th>
                <th>Action</th>
            </tr>
            <?php
                $tpegawai = mysqli_query($koneksi, "SELECT * FROM pegawai");
                $i = 1;
                while($datapegawai = mysqli_fetch_array($tpegawai)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $datapegawai['idpegawai' ] ; ?></td>
                <td><?php echo $datapegawai['nama' ] ; ?></td>
                <td><?php echo $datapegawai['golongan' ] ; ?></td>
                <td>
                    <a class="edit" href="edit_pegawai.php?id=<?php echo $datapegawai['idpegawai' ] ; ?>">Edit</a> |
                    <a class="hapus" href="hapus_pegawai.php?id=<?php echo $datapegawai['idpegawai' ] ; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>