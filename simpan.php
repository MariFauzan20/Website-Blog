<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$title = $_POST['title'];
$isi = $_POST['isi'];

// menginput data ke database
mysqli_query($koneksi,"insert into artikel values('','$title','$isi')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
