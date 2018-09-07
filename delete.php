<?php
include 'koneksi.php';
$id = $_GET['id']; //ngambil dr url di lihat

$sql = "DELETE FROM `tbl_pengunjung` WHERE id='$id' ";
$exe = mysqli_query($conn, $sql);

header("Location:pengunjungmasuk.php");
?>
