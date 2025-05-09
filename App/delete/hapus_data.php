<?php 
include('../../conf/config.php');
// Mengakses data dari $_GET dengan pengecekan agar tidak terjadi 'undefined array key'
$id = $_GET['id'];


//data admin
$id_admin = $_GET['id_admin'];

//data member
$id = $_GET['id'];


// Menampilkan data dengan aman
//echo htmlspecialchars($nama) . "<br>";
//echo htmlspecialchars($email) . "<br>";
//echo htmlspecialchars($jabatan) . "<br>";
//echo htmlspecialchars($status) . "<br>";
$query = mysqli_query($koneksi,"DELETE FROM tb_karyawan WHERE id='$id' ");
header('Location: ../index.php?page=data-karyawan');
$query = mysqli_query($koneksi,"DELETE FROM tb_admin WHERE id='$id_admin'");
header('Location: ../index.php?page=data-admin');
$query = mysqli_query($koneksi,"DELETE FROM tb_member WHERE id='$id'");
header('Location: ../index.php?page=data-admin');
?>