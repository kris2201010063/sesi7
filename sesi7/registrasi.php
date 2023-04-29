<?php
    $psn="";
    if(isset($_POST["txNAMA"])){
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];

        if($pass1==$pass2){
            $nama =$_POST["txNAMA"];
            $email =$_POST["txEMAIL"];
            $user =$_POST["txUSER"];
            $iduser =md5 ($email);
            
            $sql ="INSERT INTO tbuser  (nama,email,username,passkey,iduser) VALUES('$nama','$email','$user','$pass1','$iduser');";


            include_once("koneksi.php");
            $hasil=mysqli_query($cnn,$sql);
            if($hasil){
                $psn="Username berhasil ditambahkan";
            }else{
                $psn="Username gagal ditambahkan";
            }
        }else{
            $psn = "password tidak sama dengan konfirmasi password";
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>

<?php
   echo "<div>$psn </div>";
?>
    
    <form method="POST" action="registrasi.php">

        <div>
            Nama lengkap
            <input type="text" name="txNAMA">
        </div>
        <div>
            Email
        <input type="text" name="txEMAIL">
        </div>
        
        <div>
            USERNAME
            <input type="text" name="txUSER">
        </div>
         
        <div>
            PASSWORD
            <input type="text" name="txPASS1">
        </div>

        <div>
            password<sup>konfirmasi</sup>
            <input type="text" name="txPASS2">
        </div>
        <div>
        <button type="submit">Registrasi</button>
        
        </div>
    </form>
</body>
</html>




