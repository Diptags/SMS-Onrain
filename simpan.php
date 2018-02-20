<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$pengirim            = $_POST['pengirim'];
$penerima            = $_POST['penerima'];
$pesan               = $_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO datapesan SET pengirim='$pengirim',penerima='$penerima',pesan='$pesan'";

mysqli_query($koneksi, $query);

// mengalihkan ke halaman index.php

header("location:kumpulanpesan.php");
?>