<?php 
    require 'functionpegawai.php';

    $gaji = query("SELECT * FROM gaji");

    if(isset($_POST["submit"])) {
	    if (tambah($_POST)>0){
		    echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'tambah_pegawai.php';
				</script>
		    ";
	    } else {
		    echo "
		    <script>
			    alert('data gagal ditambahkan!');
			    document.location.href = 'tambah_pegawai.php';
		    </script>
		    ";
	    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah Pegawai</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Tambah Data Pegawai</h2>
                <a href="pegawai.php">
                    <div class="div btn btn-primary mb-4">
                        kembali
                    </div>
                </a>
                <form action="" method="post">
                    <ul>
                        <li class="mb-2">
                            <label for="idpegawai">NIP&ensp;: </label>
                            <input type="text" name="idpegawai" id="idpegawai" required>
                        </li>
                        <li class="mb-2">
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" id="nama" required>
                        </li>
                        <li  class="mb-2">
                            <div class="form-group">
                                <label for="golongan ">Golongan</label>
                                <select name="golongan" class="form-control" id="golongan">
                                <option selected>Pilih Golongan</option>
                                <?php foreach($gaji as $dtgaji) : ?>
                                    <option value="<?= $dtgaji["golongan"] ?>"><?= $dtgaji["golongan"] ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </li>
                        <li class="mt-2">
                            <button type="submit" name="submit">Simpan</button>
                        </li>  
                    </ul>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>