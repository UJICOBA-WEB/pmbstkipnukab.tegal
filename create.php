<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Calon Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    include "koneksi.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = input($_POST["nama"]);
        $asal_sekolah = input($_POST["asal_sekolah"]);
        $program_studi = input($_POST["program_studi"]);
        $no_hp = input($_POST["no_hp"]);
        $alamat = input($_POST["alamat"]);

        $sql = "INSERT INTO calon_mahasiswa (nama, asal_sekolah, program_studi, no_hp, alamat) VALUES ('$nama', '$asal_sekolah', '$program_studi', '$no_hp', '$alamat')";

        $hasil = mysqli_query($kon, $sql);

        if ($hasil) {
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>
    <h2>Input Data Calon Mahasiswa Baru</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>
        <div class="form-group">
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukan Asal Sekolah" required />
        </div>
        <div class="form-group">
            <label>Program Studi:</label>
            <input type="text" name="program_studi" class="form-control" placeholder="Masukan Program Studi" required />
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
