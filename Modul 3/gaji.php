
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   

        <title>Gaji</title>
    </head>
    <body>
        <?php
            include "koneksi.php";

        ?>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <a href="tambah_gaji.php">
                        <div class="div btn btn-primary mb-4">
                            Tambah Data
                        </div>
                    </a>
                    <a href="pegawai.php">
                        <div class="div btn btn-primary mb-4">
                            Ke Halaman Pegawai
                        </div>
                    </a>
                </div>
        </br>
        <table border="1" class="table" cellpadding="15" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Golongan</th>
                <th>Gaji</th>
                <th>Tunjangan</th>
                <th>Action</th>
            </tr>
            <?php
                $tgaji = mysqli_query($koneksi, "SELECT * FROM gaji");
                $i = 1;
                while($datagaji = mysqli_fetch_array($tgaji)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $datagaji['golongan' ] ; ?></td>
                <td><?php echo $datagaji['gaji' ] ; ?></td>
                <td><?php echo $datagaji['tunjangan' ] ; ?></td>
                <td>
                    <a href="hapus_gaji.php?id=<?php echo $datagaji["golongan"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>