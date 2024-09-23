<?php
if ($_POST) {
    $id = $_POST['id'];
    $nama= $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $password = $_POST['password'];
    $id_jabatan = $_POST['id_jabatan'];
    if (empty($nama)) {
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($nik)) {
        echo "<script>alert('nik tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update tabel_pegawai set nama='" . $nama . "',nik='" . $nik . "', jenis_kelamin='" . $jenis_kelamin . "', alamat='" . $alamat . "', no_tlp='" . $no_tlp . "', id='" . $id . "' where id= '" . $id . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php?id=" . $id . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update tabel_pegawai set nama='" . $nama . "',nik='" . $nik . "', jenis_kelamin='" . $jenis_kelamin . "', alamat='" . $alamat . "',no_tlp='" . $no_tlp . "', password='" . md5($password) . "', Jabatan='" . $id_jabatan . "' where id = '" . $id . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah.php?id=" . $id . "';</script>";
            }
        }

    }
}

?>