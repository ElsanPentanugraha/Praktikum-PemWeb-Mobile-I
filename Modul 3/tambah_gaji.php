<?php 

  require 'functiongaji.php';



// cek tombol Simpan(submit) sudah ditekan atau belum
if(isset($_POST["submit"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)>0){
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tambah_gaji.php';
			</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'tambah_gaji.php';
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

    <title>Tambah Gaji</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Tambah Data Gaji</h2>
                    <a href="gaji.php">
                        <div class="div btn btn-primary mb-4">
                            kembali
                        </div>
                    </a>
                    <form action="" method="post">
                        <ul>
                            <li class="mb-2">
                                <label for="golongan">golongan : </label>
                                <input type="text" name="golongan" id="golongan" required>
                            </li>
                            <li class="mb-2">
                                <label for="gaji">gaji&emsp;&emsp;: </label>
                                <input type="text" name="gaji" id="gaji" required>
                            </li>
                            <li class="mb-2">
                                <label for="tunjangan">Tunjangan : </label>
                                <input type="text" name="tunjangan" id="tunjangan" required>
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