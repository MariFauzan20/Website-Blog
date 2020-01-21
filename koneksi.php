<?php
  // isi nama host, username mysql, dan password mysql anda
  $koneksi = mysqli_connect("localhost","root","","blog");
  // Check connection
  if (mysqli_connect_errno()){
  	echo "Koneksi database gagal : " . mysqli_connect_error();
  } else {
    echo "Mantap";
  }
?>
