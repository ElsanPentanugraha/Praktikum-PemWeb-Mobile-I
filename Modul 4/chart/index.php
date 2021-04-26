<?php
    require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Survey Mahasiswa</title>
</head>
<body>
    <div class="tabel-name">
        <h2>Tabel Hasil Survey Mahasiswa</h2>
    </div>
    <a href="grafik_mhs.php">
        <button class="btn-grafik">
            Lihat Chart
        </button>
    </a>
</br>
</br>
</br>
    <div class="tabel">
        <table border="1" class="table" cellpadding="20" cellspacing="0">
            <tr>
                <th>NO</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Fakultas </th>
                <th>Action</th>
            </tr>
            <?php
                $queryssepatu = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                $i = 1;
                while($datasepatu = mysqli_fetch_array($queryssepatu)){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $datasepatu['nama_mhs' ] ; ?></td>
                <td><?php echo $datasepatu['nim' ] ; ?></td>
                <td><?php echo $datasepatu['jenis_kelamin' ] ; ?></td>
                <td><?php echo $datasepatu['fakultas' ] ; ?></td>
                <td>
                    <a class="edit" href="koneksi.php?id=<?php echo $datasepatu['id_merk' ] ; ?>">Edit</a> |
                    <a class="hapus" href="koneksi.php?id=<?php echo $datasepatu['id_merk' ] ; ?>" 
                    onclick="return confirm('yakin?');">hapus</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>