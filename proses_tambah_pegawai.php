<?php
if($_POST){
    $nama=$_POST['nama'];
    $nik=$_POST['nik'];
    $no_tlp=$_POST['no_tlp'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $password= $_POST['password'];
    $Jabatan=$_POST['Jabatan'];
    if(empty($nama)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `tabel_pegawai` (`nik`, `nama`, `alamat`, `jenis_kelamin`, `no_tlp`, `Jabatan`, `password`) VALUES ('".$nik."','".$nama."','".$alamat."','".$jenis_kelamin."','".$no_tlp."','".$Jabatan."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}

?>