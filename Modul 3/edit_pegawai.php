<?php 

require 'functionpegawai.php';

// mengambil data id yang ada pada url
$id = $_GET["id"];

//query select
$pegawai = query("SELECT * FROM pegawai INNER JOIN gaji ON pegawai.golongan=gaji.golongan 
                    WHERE pegawai.idpegawai = $id")[0];
$gaji = query("SELECT * FROM gaji");

//Sintax untuk mengecek data setelah submit setelah mengedit data pegawai
if(isset($_POST["submit"])) {
	if (ubah($_POST)>0){
		echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'pegawai.php';
				</script>
		";
	} else {
		echo "
		<script>
					alert('data gagal diubah!');
					document.location.href = 'pegawai.php';
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
        <title>Ubah Data Pegawai</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Edit Data Pegawai</h2>
                        <a href="pegawai.php">
                            <div class="div btn btn-primary mb-4">
                                kembali
                            </div>
                        </a>
                    <form action="" method="post">
                        <ul>
                            <li>
                                <label for="nama">Nama Pegawai : </label>
                                <input type="text" name="nama" id="nama" required value="<?php echo $pegawai["nama"]; ?>">

                                <input type="hidden" name="idpegawai" id="nama" required value="<?php echo $pegawai["idpegawai"]; ?>">
                            </li>
                            <li  class="mb-2">                            
                                <div class="form-group">
                                    <label for="golongan ">Golongan</label>
                                    <select name="golongan" class="form-control" id="golongan">
                                    <option  value="<?php echo $pegawai["golongan"]; ?>" selected><?php echo $pegawai["golongan"]; ?></option>
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