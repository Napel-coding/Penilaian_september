<!DOCTYPE html>
<html>

<head>
    <title>Login Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center">Login Pegawai</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
               
                    <div class="mb-3">
                    <form method="post" action="proses_login.php">
                        <label for="nik" class="form-label">NIK:</label> <!-- Use 'nik' for the input -->
                        <input type="text" id="nik" name="nik" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <input type="submit" value="Login" class="btn btn-primary">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
