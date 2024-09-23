<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ubah Pegawai</title>
    
</head>

<body>
    <?php
    include "koneksi.php";
    $qry_get_pegawai = mysqli_query($conn, "select * from tabel_pegawai where id = '" . $_GET['id'] . "'");
    $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
    ?>
    <h3>Ubah Pegawai</h3>
    <form action="proses_ubah.php" method="post">
        <input type="hidden" name="id" value="<?= $data_pegawai['id'] ?>" />
        nama pegawai:
        <input type="text" name="nama" value="<?= $data_pegawai['nama'] ?>" class="form-control">
        NIK :
        <input type="text" name="nik" value="<?= $data_pegawai['nik'] ?>" class="form-control">
        Gender :
        <?php
        $arr_jenis_kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <option>Pilih Jenis Kelamin</option>
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if ($key_jenis_kelamin == $data_pegawai['jenis_kelamin']) {
                    $selek = "selected";
                } else {
                    $selek = "";
                }
                ?>
                <option value="<?= $key_jenis_kelamin ?>" <?= $selek ?>><?= $val_jenis_kelamin ?></option>
            <?php endforeach ?>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $data_pegawai['alamat'] ?></textarea>
        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option>
                <?php
                include "koneksi.php";
                $qry_jabatan = mysqli_query($conn, "select * from tabel_jabatan");
                while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                    if ($data_jabatan['id_jabatan'] == $data_pegawai['Jabatan']) {
                        $selek = "selected";
                    } else {
                        $selek = "";
                    }
                    echo '<option value="' . $data_jabatan['id_jabatan'] . '"' . $selek . '>' . $data_jabatan['nama_jabatan'] . '</option>';
                }
                ?>
            </option>
        </select>
        Nomor Telepon :
        <input type="text" name="no_tlp" value="<?= $data_pegawai['no_tlp'] ?>" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>