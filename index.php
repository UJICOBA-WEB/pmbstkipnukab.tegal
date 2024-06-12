<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru STKIPNU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #16A085; /* Ubah warna background navbar menjadi hijau */
            border-bottom: none; /* Hilangkan garis bawah pada navbar */
        }

        nav .navbar-brand {
            font-family: 'Arial Black', sans-serif;
            color: white; /* Pastikan teks "Penerimaan Mahasiswa Baru STKIPNU" juga berwarna putih */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white; /* Mengubah warna teks navigasi menjadi putih */
            text-decoration: none;
            padding: 15px 0;
            display: block;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: transparent;
            transition: background-color 0.3s;
        }

        nav ul li a:hover::after {
            background-color: #ffc107; /* Ubah warna garis bawah pada hover menjadi kuning */
        }

        .background-image {
            background-image: url('assets/img/background.jpg'); /* Path ke gambar */
            background-size: cover;
            background-position: center;
            height: 400px; /* Sesuaikan tinggi sesuai kebutuhan */
            position: relative;
            margin-bottom: 20px;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Transparansi latar belakang */
        }

        .background-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }

        .section {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .section h2, .section h3 {
            color: #16A085; /* Mengubah warna teks menjadi hijau */
            margin-bottom: 20px;
        }

        .section p, .section ul, .section ol {
            margin-bottom: 15px;
        }

        .table-responsive {
            width: 100%;
        }

        footer {
            background-color: #16A085; /* Ubah warna background footer menjadi hijau */
            color: white;
        }

        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
        }

        /* Media Query untuk memastikan tabel tetap berada di tengah pada tampilan mobile */
        @media (max-width: 768px) {
            .table-responsive {
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }
        }

        .background-content h2 {
            margin-bottom: 10px;
        }

        .background-content h4,
        .background-content h5 {
            margin-top: 1px;
            margin-bottom: 1px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark d-flex justify-content-between">
        <span class="navbar-brand mb-0 h1">Penerimaan Mahasiswa Baru STKIPNU</span>
        <ul class="navbar-nav flex-row">
            <li class="nav-item"><a href="#welcome" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">Tentang Kami</a></li>
            <li class="nav-item"><a href="#programs" class="nav-link">Program Studi</a></li>
            <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
            <li class="nav-item"><a href="#register" class="nav-link">Daftar</a></li>
        </ul>
    </nav>

    <div id="home" class="background-image">
        <div class="background-overlay"></div>
        <div class="background-content">
            <p><h4>Telah Dibuka</h4></p>
            <h1><strong>Penerimaan Mahasiswa Baru</strong></h1>
            <p><h5>Tahun Ajaran 2024/2025</h5></p>
        </div>
    </div>

    <section id="welcome" class="section">
        <h3><strong>SELAMAT DATANG di PMB STKIP NU Tegal</strong></h3>
        <p>Pendaftaran Mahasiswa Baru STKIPNU TEGAL Telah Dibuka</p>
    </section>

    <section id="about" class="section">
        <h3><strong>Tentang Kami</strong></h3>
        <p>Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nahdlatul Ulama (STKIP NU) Kabupaten Tegal adalah integrasi dan sinergi antara Tri Dharma Perguruan Tinggi dengan nilai-nilai Islam Ahlusunnah wal Jamaah, yaitu:</p>
        <ul>
            <li>Tasamuh (saling menghormati dan toleransi)</li>
            <li>Tawashuth (moderat)</li>
            <li>Tawazun (keseimbangan)</li>
            <li>I'tidal (berbuat adil)</li>
            <li>Amar ma’ruf nahi munkar (mengajak kepada kebaikan dan mencegah dari keburukan)</li>
            <li>Al-Muhafadzatu 'ala al-qadimi as-shalih wal akhdzu bil jadidil ashlah (mempertahankan tradisi lama yang baik dan mengambil sesuatu yang baru yang lebih baik)</li>
        </ul>
        <p>Nilai-nilai ini merupakan landasan utama dalam membangun visi, misi, tujuan, serta sasaran yang ingin dicapai.</p>

        <p><strong>Visi:</strong></p>
        <p>Visi Sekolah Tinggi Keguruan dan Ilmu Pendidikan Nahdlatul Ulama Kabupaten Tegal adalah “Menjadi Perguruan Tinggi Terkemuka Di Tahun 2037 Berbasis Nilai-nilai Islam Ahlusunnah Wal Jama’ah An-Nahdliyah”</p>
        <p><strong>Misi:</strong></p>
        <ol>
            <li>Menyelenggarakan pendidikan yang amanah, bermutu, professional dan berdedikasi;</li>
            <li>Menyelenggarakan penelitian/riset untuk pengembangan ilmu pengetahuan dan teknologi;</li>
            <li>Melaksanakan pengabdian kepada masyarakat yang dapat meningkatkan kesejahteraan manusia;</li>
            <li>Mengembangkan dan mengimplementasikan integrasi keilmuan berbasis Nilai-nilai Islam Ahlussunnah wal Jama’ah An-Nahdliyah;</li>
            <li>Menyelenggarakan kerjasama dengan berbagai pihak dalam pelaksanaan Tridarma Perguruan Tinggi;</li>
            <li>Menjadi perguruan tinggi terkemuka di tahun 2037.</li>
        </ol>
    </section>

    <section id="programs" class="section">
        <h3><strong>Program Studi</strong></h3>
        <ul>
            <li>S1 Bimbingan Konseling</li>
            <li>S1 Pendidikan Ekonomi</li>
            <li>S1 Pendidikan Informatika</li>
            <!-- Tambahkan program studi lainnya disini -->
        </ul>
    </section>

    <section id="contact" class="section">
        <h3><strong>Kontak</strong></h3>
        <p>Hubungi kami di:</p>
        <p>Email: info@stkiptugal.ac.id</p>
        <p>Telepon: (0283) 123456</p>
    </section>

    <section id="register" class="section">
        <h3><strong>Daftar Sekarang</strong></h3>
    </section>

    <div class="container">
        <h4 class="text-center">Daftar Calon Mahasiswa Baru</h4>
        <div class="table-responsive">
            <table class="my-3 table table-bordered">
                <thead class="thead-dark">
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Asal Sekolah</th>
                        <th>Program Studi</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th colspan='2'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $sql = "SELECT * FROM calon_mahasiswa ORDER BY id_calon_mahasiswa DESC";
                    $hasil = mysqli_query($kon, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($hasil)) {
                        $no++;
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo htmlspecialchars($data["nama"]); ?></td>
                            <td><?php echo htmlspecialchars($data["asal_sekolah"]); ?></td>
                            <td><?php echo htmlspecialchars($data["program_studi"]); ?></td>
                            <td><?php echo htmlspecialchars($data["no_hp"]); ?></td>
                            <td><?php echo htmlspecialchars($data["alamat"]); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="update.php?id_calon_mahasiswa=<?php echo htmlspecialchars($data['id_calon_mahasiswa']); ?>" class="btn btn-warning mr-2">Update</a>
                                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id_calon_mahasiswa=<?php echo $data['id_calon_mahasiswa']; ?>" class="btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
    </div>

    <footer class="footer mt-5 py-3 bg-dark text-white">
        <div class="container text-center">
            <span>&copy; 2024 STKIPNU Tegal</span>
        </div>
    </footer>
</body>
</html>
