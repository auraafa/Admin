
<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'] ?? '';
$email = $_GET['email'] ?? '';
$jabatan = $_GET['jabatan'] ?? '';
$status = $_GET['status'] ?? '';
$query = mysqli_query($koneksi,"UPDATE tb_karyawan SET nama='$nama',Email='$Email',jabatan='$jabatan',status='$status' WHERE id='$id'");
header('Location: ../index.php?page=data-karyawan');

//data admin
$id_admin = $_GET['id_admin'];
$nama = $_GET['nama'] ?? '';
$username = $_GET['username'] ?? '';
$email = $_GET['email'] ?? '';
$password = $_GET['password'] ?? '';
$status_akun = $_GET['status_akun'] ?? '';
$level = $_GET['level'] ?? '';
$query = mysqli_query($koneksi,"UPDATE tb_admin SET nama='$nama',username='$username',email='$email',password='$password',status_akun='$status_akun',level='$level' WHERE id='$id'");
header('Location: ../index.php?page=data-admin');

//data member
$id = $_GET['id'];
$nama = $_GET['nama'] ?? '';
$no_hp = $_GET['no_hp'] ?? '';
$email = $_GET['email'] ?? '';
$paket = $_GET['paket'] ?? '';
$status = $_GET['status'] ?? '';
$query = mysqli_query($koneksi,"UPDATE tb_karyawan SET nama='$nama',no_hp='$no_hp',email='$email',paket='$paket',status='$status' WHERE id='$id'");
header('Location: ../index.php?page=data-admin');

// Menampilkan data dengan aman
//echo htmlspecialchars($nama) . "<br>";
//echo htmlspecialchars($email) . "<br>";
//echo htmlspecialchars($jabatan) . "<br>";
//echo htmlspecialchars($status) . "<br>";

?>