<?php 
if (isset($_GET['id'])) {
    include "koneksi.php";
    
    // Validasi bahwa 'id' adalah angka
    $id = intval($_GET['id']);  // Konversi menjadi integer untuk keamanan

    // Gunakan prepared statement untuk menghapus data
    $stmt = mysqli_prepare($conn, "DELETE FROM tabel_pegawai WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    $execute = mysqli_stmt_execute($stmt);

    if ($execute) {
        echo "<script>alert('Sukses hapus pegawai');location.href='tampil_pegawai.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus pegawai: " . mysqli_error($conn) . "');location.href='tampil_pegawai.php';</script>";
    }




    
    // Tutup statement
    mysqli_stmt_close($stmt);
    
    // Tutup koneksi
    mysqli_close($conn);
}
?>
