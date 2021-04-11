<?php
   include 'koneksi.php';


    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }

	// Fungsi menambahkan data
    function tambah($data){
	global $koneksi;
	$idpegawai = htmlspecialchars($data["idpegawai"]);
	$nama = htmlspecialchars($data["nama"]);
	$golongan = htmlspecialchars($data["golongan"]);

	$query = "INSERT INTO pegawai
				VALUES
				('$idpegawai', '$nama', '$golongan')
				";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
    }

	//Fungsi mengubah data
    function ubah($data){
	global $koneksi;
	$idpegawai = $data["idpegawai"];
	$nama = htmlspecialchars($data["nama"]);
	$golongan = htmlspecialchars($data["golongan"]);
	$query = "UPDATE pegawai SET 
				nama = '$nama', 
				golongan = '$golongan'
				WHERE idpegawai = $idpegawai
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM pegawai WHERE idpegawai = $id");
        return mysqli_affected_rows($koneksi);
    }

?>