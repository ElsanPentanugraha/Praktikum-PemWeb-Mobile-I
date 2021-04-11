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


    function tambah($data){
	global $koneksi;
	$golongan = htmlspecialchars($data["golongan"]);
	$gaji = htmlspecialchars($data["gaji"]);
	$tunjangan = htmlspecialchars($data["tunjangan"]);

	$query = "INSERT INTO gaji
				VALUES
				('$golongan', '$gaji', '$tunjangan')
				";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
    }

    function hapus($id){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM gaji WHERE golongan = $id");
        return mysqli_affected_rows($koneksi);
    }

?>