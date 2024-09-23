<?php 
    if($_POST){
        $nik=$_POST['nik'];
        $password=$_POST['password'];
        if(empty($nik)){
            echo "<script>alert('NIK tidak valid!');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from tabel_pegawai where nik = '".$nik."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nik']=$dt_login['nik'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('NIK dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>