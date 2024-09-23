<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "root", "", "perusahaan");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch "Jabatan" options from the database
$qry_tabel_jabatan = mysqli_query($conn, "SELECT * FROM tabel_jabatan");
$jabatan_options = [];
while ($row = mysqli_fetch_assoc($qry_tabel_jabatan)) {
    $jabatan_options[] = $row;
}

// Close the connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-3/assets/css/registration-3.css">
    <title>Tambah Pegawai</title>
    <form id="tambah_pegawai" action="proses_tambah_pegawai.php" method="post"></form>
</head>

<body>
<section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
                <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
                    <h3 class="m-0">Welcome!</h3>
                    <img class="img-fluid rounded mx-auto my-4" loading="lazy" src="https://tse4.mm.bing.net/th?id=OIP.2HOal3_6qXjrRk-vtVEjTgHaF7&pid=Api&P=0&h=180"
                     width="245" height="80" alt="BootstrapBrain Logo">

                    <p class="mb-0">Not a member yet? <a href="#!" class="link-secondary text-decoration-none">Register now</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
                <div class="p-3 p-md-4 p-xl-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                                <h2 class="h3">Registration</h2>
                                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                            </div>
                        </div>
                    </div>
                    <form action="proses_tambah_pegawai.php" method="POST">
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="nik" class="form-label">NIK <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                            </div>
                            <div class="col-12">
                                <label for="Nama_pegawai" class="form-label">Nama Pegawai <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="col-12">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="No_telp" class="form-label">No Telepon <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="no_tlp" required>
                            </div>
                            <div class="col-12">
                                <label for="Jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
                                <select class="form-select" name="Jabatan" id="Jabatan" required>
                                    <option value="">Pilih Jabatan</option>
                                    <?php foreach ($jabatan_options as $option): ?>
                                        <option value="<?php echo $option['id_jabatan']; ?>"><?php echo $option['nama_jabatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn bsb-btn-xl btn-primary" type="submit">Sign up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <hr class="mt-5 mb-4 border-secondary-subtle">
                            <p class="m-0 text-secondary text-end">Already have an account? <a href="#!" class="link-primary text-decoration-none">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
