<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PEMILU</title>
</head>
<body>
    <div class="form-input">
        <header>
            <h2>Web PEMILU</h2>
        </header>
        <form method="post">
            <table class="input-form" width="100%" cellpadding="10" cellspacing="0" border="0">
            <tr>
                <td width="14%">Pilih Calon</td>
                <td width="2%">:</td>
                <td width="64%">
                    <select name="pilihan">
                        <option value="1">1. Kejer</option>
                        <option value="2">2. Oscar</option>
                        <option value="3">3. Arifin</option>
                        <option value="4">4. Mitchel</option>
                        <option value="5">5. Rio</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Masukan ID pemilih</td>
                <td>:</td>
                <td>
                    <input type="number" name="id_pemilih"/>
                    <button name="kirim" type="submit" >kirim</button>
                </td>
            </tr>
        <form>
    </div>
    
    <?php 
        require 'koneksi.php';
        if (isset($_POST["kirim"])) {
            // menangkap data yang di kirim dari form
            $pilihan = $_POST['pilihan'];
            $id_pemilih = $_POST['id_pemilih'];

            $data1 = mysqli_query($koneksi,"select * from suara where id_pemilih='$id_pemilih'");

            // menghitung jumlah data yang ditemukan
            $cek = mysqli_num_rows($data1);
            echo 'ID Telah Digunakan!'; 

        if($cek <= 0){
            $data =mysqli_query($koneksi,"INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) 
                                        VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");
        if ($data) {
    ?>
    <script language="javascript">
        alert("Terima Kasih telah memilih");
    </script>
    <?php
        }
        }else if ($cek >= 0){
    ?>
    <script language="javascript">
        alert("Maaf anda hanya dapat 1x memilih!");
    </script>
    <?php  
        }
        }
    ?>

    <div class="display-hasil">
        <table border="1" class="display-table" cellpadding="20" cellspacing="0">
        </br>
        <h2>Hasil Perhitungan Sementara</h2>
            <tr>
                <th>NO Urut</th>
                <th>Jumlah Suara</th>
            </tr>
            <?php
                require 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT pilihan, COUNT(pilihan) AS 'jml_suara' FROM suara GROUP BY pilihan");
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $data['pilihan' ] ; ?></td>
                <td><?php echo $data['jml_suara' ] ; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
