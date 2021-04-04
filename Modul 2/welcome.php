<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['uname'];
        $password = $_POST['pwd'];
        $usname= strlen($username);
        $pass= strlen($password);
        $x=false;

        if(empty($usname)){
            echo "Username belum dimasukkan! <br>";
            echo "Pastikan Username yang dimasukkan berjumlah maksimal 7 karakter";
            die(" ");
        } 
        if($usname>7){
            echo "Username yang dimasukkan lebih dari 7 karakter!";
            $x=true;
            die(" ");
        } 

        if(empty($pass)){
            echo "Password belum dimasukkan!";
            echo "<br> Password harus memiliki Huruf kapital, huruf kecil, angka & karakter khusus.";
            die(" ");
        }
        if($pass<10){
            echo "Password yang dimasukkan kurang dari 10 karakter!";
            $x=true;
            die(" ");
        }

        $upperc = preg_match('@[A-Z]@', $password);
        $lowerc = preg_match('@[a-z]@', $password);
        $angka    = preg_match('@[0-9]@', $password);
        $specialc = preg_match('@[^\w]@', $password);

        if(!$upperc || !$lowerc || !$angka || !$specialc ){
            echo 'Password lemah';
        }

        if($usname && $upperc && $lowerc && $angka && $specialc){
            echo "Selamat Datang, ".$username;
            echo"<br>";
            echo "Username & Password yang dimasukkan telah sesuai dengan syarat yang telah ditentukan";
            $x=false;
            die(" ");
        }
    }
?>