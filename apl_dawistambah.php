<?php
include "../apl_koneksi.php";
$nama = $_POST['nama'];

$query = "INSERT INTO `apl_dawis` (`Id_dawis`, `Nama_dawis`) VALUES (NULL, '".$nama."')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
    header("location: apl_dawis.php"); 
}else{
   echo '<script language="javascript">alert("Maaf Terjadi Kesalahan Silakan Ulangi !"); document.location="apl_dawis.php";</script>';
}

?>