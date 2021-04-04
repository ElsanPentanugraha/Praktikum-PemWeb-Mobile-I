<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
        $usname= strlen($username);
        $pass= strlen($password);
        $x=false;

        if(empty($usname)){
            echo "<script>alert('Username belum dimasukkan! Pastikan Username yang dimasukkan berjumlah maksimal 7 karakter');</script>";
            die(" ");
        } 
        if($usname>7){
            echo "<script>alert('Username yang dimasukkan lebih dari 7 karakter!')</script>";
            die(" ");
        } 

        if(empty($pass)){
            echo "<script>alert('Password belum dimasukkan! Password harus memiliki Huruf kapital, huruf kecil, angka & karakter khusus.')</script>";
            die(" ");
        }
        if($pass<10){
            echo "<script>alert('Password yang dimasukkan kurang dari 10 karakter!')</script>";
            die(" ");
        }

        $upperc = preg_match('@[A-Z]@', $password);
        $lowerc = preg_match('@[a-z]@', $password);
        $angka    = preg_match('@[0-9]@', $password);
        $specialc = preg_match('@[^\w]@', $password);

        if(!$upperc || !$lowerc || !$angka || !$specialc ){
            echo "<script>alert('Password lemah!')</script>";
        }

        if($usname && $upperc && $lowerc && $angka && $specialc){
            echo "Selamat Datang, ".$username;
            echo"<br>";
            echo "Username & Password yang dimasukkan telah sesuai dengan syarat yang telah ditentukan";
            die(" ");
        }
    }
?>