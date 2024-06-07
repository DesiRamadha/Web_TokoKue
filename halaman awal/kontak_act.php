<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($koneksi, "INSERT INTO kontak VALUES ('','$nama','$email','$pesan')");

header("Location:index.php");
