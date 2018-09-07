<?php
include "../apl_koneksi.php";
$nama = $_POST['nama'];

$query = "INSERT INTO `apl_kota` (`Id_kota`, `Nama_kota`) VALUES (NULL, '".$nama."')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: apl_kota.php"); 
}else{
   echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_kota.php";</script>';
}

?>