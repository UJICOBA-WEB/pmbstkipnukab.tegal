<!DOCTYPE html>
<html>
<head>
    <title>Form Update Data Calon Mahasiswa Baru</title>
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

    if (isset($_GET['id_calon_mahasiswa'])) {
        $id_calon_mahasiswa = input($_GET["id_calon_mahasiswa"]);

        $sql = "SELECT * FROM calon_mahasiswa WHERE id_calon_mahasiswa = $id_calon_mahasiswa";
        $hasil = mysqli_query($kon, $sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_calon_mahasiswa = htmlspecialchars($_POST["id_calon_mahasiswa"]);
        $nama = input($_POST["nama"]);
        $asal_sekolah = input($_POST["asal_sekolah"]);
        $program_studi = input($_POST["program_studi"]);
        $no_hp = input($_POST["no_hp"]);
        $alamat = input($_POST["alamat"]);

        $sql = "UPDATE calon_mahasiswa SET
            nama = '$nama',
            asal_sekolah = '$asal_sekolah',
            program_studi = '$program_studi',
            no_hp = '$no_hp',
            alamat = '$alamat'
            WHERE id_calon_mahasiswa = $id_calon_mahasiswa";

        $hasil = mysqli_query($kon, $sql);

        if ($hasil) {
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>
    <h2>Update Data Calon Mahasiswa Baru</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required />
        </div>
        <div class="form-group">
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukan Asal Sekolah" value="<?php echo htmlspecialchars($data['asal_sekolah']); ?>" required />
        </div>
        <div class="form-group">
            <label>Program Studi:</label>
            <input type="text" name="program_studi" class="form-control" placeholder="Masukan Program Studi" value="<?php echo htmlspecialchars($data['program_studi']); ?>" required />
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" value="<?php echo htmlspecialchars($data['no_hp']); ?>" required />
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required><?php echo htmlspecialchars($data['alamat']); ?></textarea>
        </div>

        <input type="hidden" name="id_calon_mahasiswa" value="<?php echo htmlspecialchars($data['id_calon_mahasiswa']); ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
